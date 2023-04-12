<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function ProfileView(){
        $user = User::find(Auth::user()->id);
        if(Auth::user()->hasRole('mitra')){
           $redirect = 'mitra.mitraprofile';
        }elseif(Auth::user()->hasRole('superadmin')){
            $redirect = 'SuperAdmin.profile-superadmin';
        }elseif(Auth::user()->hasRole('employee')){
            $redirect = 'admin.profile-employee';
        }
        return view($redirect, [
            'user' => $user,
        ]);
    }

    public function ProfileUpdate(Request $request){
        $validatedData = $request->validate([
            'name' => 'required', 'string', 'max:255',
            'profile' => 'mimes:jpeg,png,jpg',
        ]);
        if(!$validatedData){
            return redirect('mitra-profile');
        }
        $old_image = User::find(Auth::user()->id)->profile_photo_path;
        DB::beginTransaction();
        try{
            if (isset($request->profile)) {
                $name = time()."_".$request->profile->getClientOriginalName();
                $request->profile->move(public_path('data_user/'.Auth::user()->id.'/profile'), $name);
                $data = [   'name' => $request->name,
                            'profile_photo_path' => $name,
                        ];
            }else{
                $data = ['name' => $request->name];
            }
            DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($data);
            DB::commit();
            if($old_image != NULL){
                if(File::exists(public_path('data_user/'.Auth::user()->id.'/profile/'. $old_image)) && isset($request->profile)){
                    unlink('data_user/'.Auth::user()->id.'/profile/'.$old_image);
                }
            }
            $status = 'status_update';
            $msg = 'Profile Update!';
        }catch(\Exception $e){
            if(isset($request->profile)){
                $name = time()."_".$request->profile->getClientOriginalName();
                unlink('data_user/'.Auth::user()->id.'/profile/'.$name);
            }
            DB::rollback();
            $status = 'status_update_fail';
            $msg = 'Profile Gagal Update!';
        }
        return redirect('profile')->with($status, $msg);
    }
}
