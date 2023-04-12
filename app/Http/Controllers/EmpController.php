<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmpController extends Controller
{
    public function StoreValidationView()
    {
        $data = Store::where('status_activation', 0)->orderBy('created_at', 'asc')->get();
        $nonaktif = Store::where('status_activation', 0)->get();
        $loc = [];
        foreach ($data as $d) {
            $loc[] = [
                $d->id,
            ];
        }
        return view('admin.validasi-bengkel', [
            'stores' => $data,
            'non_aktif' => $nonaktif->count(),
            'data' => 0,
            'loc' => $loc,
        ]);
    }

    public function StoreValidation(Request $request)
    {
        $store = Store::find(request()->id);
        $store->update($request->except(['_token', 'id']));
        return redirect()->back();
    }

    public function ListMitraView()
    {
        $users = User::whereRoleIs(['mitra'])->where('created_at', '!=', 'NULL')->get();
        return view('admin.listmitra', [
            'users' => $users,
        ]);
    }

    public function ListNonMitra()
    {
        $users = User::whereRoleIs(['mitra'])->where('created_at', NULL)->get();
        return view('admin.listmitra', [
            'users' => $users,
        ]);
    }

    public function mitra(User $user)
    {
        $users = User::whereRoleIs(['mitra'])->get();
        // return $users;
        return view('SuperAdmin.employeeList.index', [
            'users' => $users,
        ]);
    }

    public function employee(User $user)
    {
        $users = User::whereRoleIs(['employee'])->get();
        // return $users;
        return view('SuperAdmin.employeeList.index', [
            'users' => $users,
        ]);
    }

    public function UpdateDataMitra(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'min:16'],
            // 'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:posts'],
            'npwp' => ['required', 'string', 'max:16', 'min:16',],
        ]);
        if (!$validateData) {
            return redirect('list-mitra');
        }
        $model = User::find($request->id);
        $model->update($request->except(['id']));
        return redirect('list-mitra')->with('success_update', 'User has been updated');
    }

    public function DeleteDataMitra($id)
    {
        // dd($n);
        $users = User::find($id);
        $users->delete();
        return redirect('list-mitra')->with('success_update', 'User has been deleted');;
    }

    public function NonAktifMitra(Request $request)
    {
        // echo $request;
        $note = 'Anda di Non-Aktifkan, Silahkan Hubungi Customer Service Bengkel AE';
        $mitra = User::find($request->id)->update(['created_at' => NULL]);
        $nama = User::find($request->id)->name;
        if ($mitra) {
            $data = array('title' => 'Anda di Non-Aktifkan','nama'=>$nama, 'note' => $note);
            Mail::send('email.mitra-non', $data, function ($message) {
                $message->to(request()->email, 'Anda Di Non-Aktifkan')->subject('Anda di Non-Aktifkan');
                $message->from(Auth::user()->email, Auth::user()->name);
            });
        }
        return redirect('/list-mitra');
    }

    public function AktifMitra(Request $request)
    {
        $note = 'di Aktfikan Kembali, Silahkan Masuk Kembali Menggunakan Akun Sebelumnya';
        $nama = User::find($request->id)->name;
        $mitra = User::find($request->id)->update(['created_at' => Carbon::now()]);
        if ($mitra) {
            $data = array('title' => 'Anda di Aktifkan', 'nama'=>$nama, 'note' => $note);
            Mail::send('email.mitra-aktif', $data, function ($message) {
                $message->to(request()->email, 'Akun Anda Di Aktifkan')->subject('Akun Anda di Aktifkan');
                $message->from(Auth::user()->email, Auth::user()->name);
            });
        }
        return redirect('/list-nonmitra');
    }
}
