<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function searchStore(Request $request){
        $query = $request->get('query');
        $output = '';
        if($query != ''){
            $data = Store::where('store_name', 'like', '%'.$query.'%')->where('status_activation', 1)->get();
            if($data->count() > 0){
                foreach($data as $d){
                    $output .= '
                        <li class="text-left" style="padding:5px;"><b><a href="/store-view/'.$d->id.'/show">'.$d->store_name.', '.$d->kecamatan->name.', '.$d->kecamatan->kota->name.'</a></b></li>
                    ';
                }
            }else{
                $output .= 'Bengkel Tidak Ditemukan';
            }
        }
        echo $output;
    }

    public function searchKecamatan(Request $request){
        $query = $request->get('query');
        $output = '';
        if($query != ''){
            $data = Kecamatan::where('kota_id', $query)->get();
                $output .= '<option value="">Pilih Kecamatan</option>';
            foreach($data as $d){
                $output .= '
                    <option value="'.$d->id.'">'.$d->name.'</option>
                ';
            }
        }else{
            $output .= '
                <option value="">Pilih Kota Dahulu</option>
            ';
        }
        return $output;
    }

    public function searchEmployeeMitra(Request $request){
        $query = $request->get('query');
        $output = '';
        if($query != ''){
            $users = User::whereRoleIs(['employee', 'mitra'])->where('name', 'like', '%'.$query.'%')->get();
        }else{
            $users = User::whereRoleIs(['employee', 'mitra'])->get();
        }
        foreach($users as $user){
            if($user->roles->first()->name == 'employee'){
                $special = '
                    <a class="btn btn-link text-dark px-3 mb-0"
                    href="/dashboard/'.$user->id.'/edit"><i
                    class="fas fa-pencil-alt text-dark me-2"></i>Edit</a>
                ';
            }else{
                $special = '';
            }
            $output .= '
            <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="/argon/img/team-3.jpg" class="avatar avatar-sm me-3"
                                alt="user2">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">'.$user->name.'</h6>
                            <p class="text-xs text-secondary mb-0">'.$user->email.'</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">
                        '.$user->roles->first()->name.'
                    </p>
                </td>
                <td class="align-middle text-center">
                    '.$special.'
                    <button type="button" class="btn bg-gradient-danger btn-block mb-3"
                        data-bs-toggle="modal" data-bs-target="#delete'.$user->id.'">
                        Delete
                    </button>
                    <br>
                    <button type="button" class="btn bg-gradient-info btn-block mb-3"
                        data-bs-toggle="modal" data-bs-target="#info'.$user->id.'">
                        Informasi
                    </button>
                </td>
            </tr>
            ';
        }
        return $output;
    }

    public function searchBengkelAktif(Request $request){
        $query = $request->get('query');
        $status = $request->get('status');
        $output = '';
        $no = 1;
        if($query != ''){
            $stores = Store::where('store_name', 'like', '%'.$query.'%')->where('status_activation', $status)->get();
        }else{
            $stores = Store::where('status_activation', $status)->get();
        }
        if($stores->count()>0){
            foreach($stores as $s){
                if($status == 1){
                    $button = '
                    <button type="button" class="btn btn-block bg-gradient-danger mb-3"
                        data-bs-toggle="modal" data-bs-target="#deactive'.$s->id.'">
                        Nonaktif
                    </button>
                    <button type="button" class="btn btn-block bg-gradient-info mb-3"
                        data-bs-toggle="modal" data-bs-target="#detail'.$s->id.'">
                        Detail
                    </button>
                    ';
                }elseif($status == 2){
                    $button = '
                    <button type="button" class="btn btn-block bg-gradient-info mb-3"
                        data-bs-toggle="modal" data-bs-target="#detail'.$s->id.'">
                        Detail
                    </button>
                    ';
                }elseif($status == 3){
                    $button = '
                    <button type="button" class="btn btn-block bg-gradient-primary mb-3"
                        data-bs-toggle="modal" data-bs-target="#act'.$s->id.'">
                        Aktivasi
                    </button>
                    <button type="button" class="btn btn-block bg-gradient-info mb-3"
                        data-bs-toggle="modal" data-bs-target="#detail'.$s->id.'">
                        Detail
                    </button>
                    ';
                }
                $output .= '
                <tr>
                    <td>
                        '.$no++.'
                    </td>
                    <td>
                        '.$s->store_name.'
                    </td>
                    <td>
                        '.$s->users->name.'
                    </td>
                    <td>
                        '.$s->users->email.'
                    </td>
                    <td>
                        '.$s->phone_store.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$s->address.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$button.'
                    </td>
                </tr>
                ';
            }
        }else{
            $output .= 'Data Tidak Ditemukan';
        }
        return $output;
    }

    public function searchBengkelEmployee(Request  $request){
        $query = $request->get('query');
        $status = $request->get('status');
        $output = '';
        $no = 1;
        if($query!=''){
            $stores = Store::where('store_name', 'like', '%'.$query.'%')->where('status_activation', $status)
            ->orderBy('created_at', 'ASC')->get();
        }else{
            $stores = Store::where('status_activation', $status)->orderBy('created_at', 'ASC')->get();
        }
        if($stores->count()>0){
            foreach($stores as $s){
                if($s->status == 0){
                    if($s->lat != NULL && $s->long != NULL){
                        $button = '
                        <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal"
                            data-bs-target="#act'.$s->id.'">
                            Aktifkan
                        </button>
                        ';
                    }else{
                        $button = '
                        <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal"
                            data-bs-target="#conf'.$s->id.'">
                            Konfirm
                        </button>
                        ';
                    }
                }
                $button .= '
                    <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal"
                        data-bs-target="#rej'.$s->id.'">
                        Reject
                    </button>
                    <button class="btn text-white" style="background-color: red">
                        Delete
                    </button>
                    <button type="button" class="btn btn-block bg-gradient-info mb-3"
                        data-bs-toggle="modal" data-bs-target="#detail'.$s->id.'">
                        Detail
                    </button>
                    ';
                $output .= '
                <tr>
                    <td>
                        '.$no++.'
                    </td>
                    <td>
                        '.$s->store_name.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$s->address.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$s->kecamatan->name.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$s->kecamatan->kota->name.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$s->updated_at.'
                    </td>
                    <td class="align-middle text-sm">
                        '.$button.'
                    </td>
                </tr>
                ';
            }
        }else{
            $output .= 'Data Tidak Ditemukan';
        }
        return $output;
    }

    public function searchMitra(Request $request){
        $query = $request->get('query');
        $output = '';
        $no = 1;
        if($query != ''){
            $users = User::where('name', 'like', '%'.$query.'%')->whereRoleIs(['mitra'])->get();
        }else{
            $users = User::whereRoleIs(['mitra'])->get();
        }
        if($users->count()>0){
            foreach($users as $user){
                $output .= '
                <tr class="text-center">
                    <td class="pt-3">'.$no++.'</td>
                    <td class="pt-3">'.$user->name.'</td>
                    <td class="pt-3">'.$user->roles->first()->display_name.'</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#nonactive'.$user->id.'">Non Aktif</button>
                        <button type="button" class="btn bg-gradient-danger btn-block mb-3"
                            data-bs-toggle="modal" data-bs-target="#delete'.$user->id.'">
                            Delete
                        </button>
                    </td>
                </tr>
                ';
            }
        }else{
            $output .= 'Data Mitra Tidak Ditemukan';
        }
        return $output;
    }
}
