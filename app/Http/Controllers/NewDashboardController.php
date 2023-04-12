<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Role;
use App\Models\Store;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
class NewDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('employee')) {
            return view('admin.admindashboard');
        } elseif (Auth::user()->hasRole('superadmin')) {
            $employe = User::whereRoleIs(['employee'])->get();
            return view('SuperAdmin.admindashboard', [
                'employee'=>$employe,
                'total_users' => User::count(),
                'total_stores' => Store::count(),
                'total_items' => Item::count(),
            ]);
        } elseif (Auth::user()->hasRole('mitra')) {
            echo 'loggin as mitra';
        } else {
            return view('user.userdashboard', ['title' => 'Landing Page']);
        }
    }

    public function GuestView()
    {
        $store = Store::where('status_activation', 1)->get();
        $data = [];
        foreach($store as $s){
            $data[] = [
                $s->store_name,
                $s->lat,$s->long,
            ];
        }
        return view('user.userdashboard' , [
            'items' => Item::all(),
            'location' => $data,
            'title' => 'Dashboard'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdmin.crud.create', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->except(['_token']), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nik' => ['required', 'string', 'max:16', 'min:16', 'unique:users,nik'],
            'role' => ['required'],
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
        ])->validate();
        DB::beginTransaction();
        try{
            $user = User::create([
                'name' => request()->name,
                'email' => request()->email,
                'nik' => request()->nik,
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password'=> Hash::make(request()->password),
            ]);
            $user->attachRole($request->role);

            $data = array('name'=>request()->name, 'email'=>request()->email, 'password'=> request()->password);
            Mail::send('email.em-sa-email', $data, function($message) {
                $message->to(request()->email, 'Test Email')->subject
                ('Email dan Password Employee');
                $message->from(Auth::user()->email, Auth::user()->name);
            });

            DB::commit();

            return redirect('/newdashboard')->with('success', 'User has been created');
        }catch(\Exception $e){
            DB::rollback();
            echo 'Error Exception';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users = User::all();
        
        return view('SuperAdmin.employeeList.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('SuperAdmin.crud.edit',[
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
