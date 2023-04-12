<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonaktif = Store::where('status_activation', 0)->get();
        $aktif = Store::where('status_activation', 1)->get();
        $reject = Store::where('status_activation', 2)->get();
        $banding = Store::where('status_activation', 3)->get();

        if (Auth::user()->hasRole('employee')) {
            $data = DB::table('items')->where('user_id', Auth::user()->id)->get();
            $nonaktif = Store::where('status_activation', 0)->get();
            $aktif = Store::where('status_activation', 1)->get();
            $reject = Store::where('status_activation', 2)->get();
            $banding = Store::where('status_activation', 3)->get();
            $mitra = User::whereRoleIs('mitra')->get();
            return view('admin.admindashboard', [
                'non_aktif' => $nonaktif->count(),
                'aktif' => $aktif->count(),
                'reject' => $reject->count(),
                'banding' => $banding->count(),
                'mitra' => $mitra->count(),
            ]);

            return view('admin.admindashboard');
        } elseif (Auth::user()->hasRole('superadmin')) {
            $employe = User::whereRoleIs(['employee'])->get();
            $total_mitra = User::whereroleis('mitra')->get();
            return view('SuperAdmin.admindashboard', [
                'employee' => $employe->count(),
                'mitra' => $total_mitra->count(),
                'non_aktif' => $nonaktif->count(),
                'aktif' => $aktif->count(),
                'reject' => $reject->count(),
                'banding' => $banding->count(),
                'total_items' => Item::count(),
            ]);
        } elseif (Auth::user()->hasRole('mitra')) {
            $data = DB::table('items')->where('user_id', Auth::user()->id)->get();
            $nonaktif = Store::where('id_mitra', Auth::user()->id)->where('status_activation', 0)->get();
            $aktif = Store::where('id_mitra', Auth::user()->id)->where('status_activation', 1)->get();
            $reject = Store::where('id_mitra', Auth::user()->id)->where('status_activation', 2)->get();
            $banding = Store::where('id_mitra', Auth::user()->id)->where('status_activation', 3)->get();
            $mitra = User::find(Auth::user()->id);
            return view('mitra.index', [
                'item' => $data->count(),
                'non_aktif' => $nonaktif->count(),
                'aktif' => $aktif->count(),
                'reject' => $reject->count(),
                'banding' => $banding->count(),
                'mitra' => $mitra,
            ]);
        } else {
            return view('user.userdashboard', ['title' => 'Landing Page']);
        }
    }

    public function GuestView()
    {

        $store = Store::where('status_activation', 1)->get();
        $categories = Category::paginate(3);
        $data = [];
        foreach ($store as $s) {
            $data[] = [
                $s->store_name,
                $s->lat, $s->long,
                $s->id,
            ];
        }
        return view('user.user-dashboard', [
            'items' => Item::all(),
            'location' => $data,
            'categories' => $categories,
            'title' => 'Dashboard'
        ]);
    }

    public function StoreView($id)
    {
        $data = Store::find($id);
        $latlong = [$data->lat, $data->long];
        return view('user.store-view', [
            'data' => $data,
            'latlong' => $latlong,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        if (Auth::user()->hasRole('superadmin')) {
            return view('SuperAdmin.crud.create', [
                'roles' => Role::all()
            ]);
        } elseif (Auth::user()->hasRole('mitra')) {
            $mitra = User::find(Auth::user()->id);
            $bengkel = DB::table("stores")
                ->join("users", function ($join) {
                    $join->on("stores.id_mitra", "=", "users.id");
                })
                ->select("stores.store_name", "stores.id")
                ->where("users.id", "=", Auth::id())
                ->get();
            $categories = Category::all();
            return view('mitra.crud.create', [
                'mitra' => $mitra,
                'categories' => $categories,
                'bengkel' => $bengkel,
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
            if (Auth::user()->hasRole('superadmin')) {
            $users = User::whereRoleIs(['employee', 'mitra'])->get();
            return view('SuperAdmin.employeeList.index', [
                'users' => $users,
            ]);
        } elseif (Auth::user()->hasRole('mitra')) {
            $mitra = User::find(Auth::user()->id);
            $item = Item::where('user_id', Auth::user()->id)->get();
            return view('mitra.productList.index',
                [
                    'item' => $item,
                    'mitra' => $mitra
                ]
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->hasRole('superadmin')) {
            $user = User::find($id);
            return view('SuperAdmin.crud.edit', [
                'user' => $user,
                'roles' => Role::all(),
            ]);
        }
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
    public function destroy(User $user, Item $item)
    {
        if (Auth()->hasRole('superadmin')) {
            User::destroy($user->id);
            return redirect('dashboard')->with('success', 'User has been deleted');
        }
    }
}
