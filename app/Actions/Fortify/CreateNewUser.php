<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:users,nik'],
            'npwp' => ['string', 'max:16', 'min:16', 'unique:users,npwp'],
            'password' => $this->passwordRules(),
            'photo' => ['mimes:jpeg,png,jpg,gif', 'max:2048'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        DB::beginTransaction();
        try{
            if (isset($input['photo'])) {
                $name = time()."_".$input['photo']->getClientOriginalName();
            }
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'nik' => $input['nik'],
                'npwp' => $input['npwp'],
                'ktp' => $name,
                'password' => Hash::make($input['password']),
            ]);
            if (isset($input['photo'])) {
                $input['photo']->move(public_path('data_user/'.DB::getPdo()->lastInsertId().'/ktp'), $name);
            }
            $user->attachRole('mitra');
            DB::commit();
            return $user;
        }catch(\Exception $e){
            File::deleteDirectory(public_path('data_user/'.$input['email']));
            DB::rollback();
            echo 'Error Gan';
        }
    }
}
