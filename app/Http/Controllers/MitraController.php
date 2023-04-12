<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Item;
use App\Models\Kota;
use App\Models\User;
use App\Models\Store;
use App\Models\Category;
use App\Models\ItemStore;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\StoreRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class MitraController extends Controller
{


    public function create_product(CreateProductRequest $request)
    {
        Item::create($request->validated());
        ItemStore::create([
            'store_id' => request('bengkel'),
            'item_id' => Item::latest()->first()->id,
            'price' => request('price'),
            //'user_id' => Auth::id()
        ]);
        return redirect('dashboard/show')->with('success', 'Product has been added');
    }

    public function edit($id)
    {
        $item = Item::where('id', $id)->first();
        $bengkel = DB::table("stores")
            ->join("users", function ($join) {
                $join->on("stores.id_mitra", "=", "users.id");
            })
            ->select("stores.store_name", "stores.id")
            ->where("users.id", "=", Auth::id())
            ->get();
        return view('mitra.crud.update-product', [
            'item' => $item,
            'categories' => Category::all(),
            'bengkel' => $bengkel
        ]);
    }

    public function update_product(Request $request, $id)
    {
        $category = explode(',', request('category'));
        $data = [
            'name' => request('name'),
            'brand' => request('brand'),
            //'price' => request('price'),
            'category_id' => $category[0],
            'slug' => strtolower($category[1]),
            'desc' => request('desc'),
            'spec' => request('spec'),
            'image' => request()->file('product_image')->store('product_image')
        ];
        if ($request->file('product_image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $request->file('product_image')->store('product_image');
        }

        Item::where('id', $id)->update($data);
        // ItemStore::where('item_id', $id)->update([
        //     'store_id' => request('bengkel'),
        //     'price' => request('price')
        // ]);
        return redirect('dashboard');
    }

    public function DeleteProduct($id)
    {
        Item::where('id', $id)->firstorfail()->delete();
        // Item::destroy($id);
        return redirect('/dashboard/show')->with('success', 'Product has been deleted');
    }

    public function SparepartToBengkelView()
    {
        $mitra = User::find(Auth::user()->id);
        $store = Store::with('item')->where('id_mitra', Auth::user()->id)->where('status_activation', 1)->get();
        $item = Item::where('user_id', Auth::user()->id)->get();
        return view('mitra.sparepartToBengkel.index',
            [
                'stores' => $store,
                'users' => $mitra,
                'item' => $item,
            ]
        );
    }

    public function ListStore()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        //$non_active = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 0)->get();
        $active = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 1)->get();
        return view('mitra.crud.list-bengkel', [
            'users' => $users,
            'stores' => $active,
        ])->with('success_update', 'Store Sudah Tertambah');
    }

    public function ListPengajuanStore()
    {
        $users = User::whereRoleIs(['mitra'])->get();
        $non_active = Store::where("id_mitra", "=", Auth::user()->id)->where('status_activation', 0)->get();
        return view('mitra.crud.list-bengkel', [
            'users' => $users,
            'stores' => $non_active,
        ])->with('success_update', 'Store Sudah Tertambah');
    }

    public function StoreEdit($id)
    {
        $store = Store::where('id', $id)->get();
        return view('mitra.crud.update-bengkel', [
            'stores' => $store

        ]);
    }

    public function StoreUpdate(Request $request, $id)
    {
        $validateData = $request->validate([
            'store_name' => ['required', 'string', 'max:255'],
            'open' => ['required'],
            'close' => ['required'],
            'address' => ['required', 'string'],
            'phone_store' => ['required', 'max:14', 'min:10'],
            'store_image' => ['required'],
        ]);
        if (!$validateData) {
            return redirect()->back();
        }
        $old_image = Store::find($id)->store_image;
        if (isset($request->store_image)) {
            $name = time() . "_" . $request->store_image->getClientOriginalName();
            $request->store_image->move(public_path('store_data/' . $id . '/image'), $name);
            if (File::exists(public_path('store_data/' . $id . '/image/' . $old_image))) {
                unlink('store_data/' . $id . '/image/' . $old_image);
            }
        } else {
            $name = $old_image;
        }
        Store::find($id)->update([
            'store_name' => $request->store_name,
            'open' => $request->open,
            'close' => $request->close,
            'address' => $request->address,
            'phone_store' => $request->phone_store,
            'store_image' => $name,
        ]);
        return redirect('list-store')->with('success_update', 'Store has been updated');
    }

    public function StoreRegisterView()
    {
        $user = User::find(1);
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        if (Auth::user()->nik != NULL && Auth::user()->ktp != NULL) {
            return view('mitra.store-register', [
                'user' => $user,
                'kec' => $kecamatan,
                'kota' => $kota,
            ]);
        } else {
            echo 'Lengkapi Data Diri';
        }
    }

    public function StoreRegisterSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'store_name' => 'required|max:255',
            'open' => 'required',
            'close' => 'required',
            'phone_store' => ['required', 'max:14', 'min:10'],
            'address' => 'required',
            'store_image' => 'required',
        ]);

        if (!$validatedData) {
            return redirect('store-register');
        }

        $name = time() . "_" . $request->store_image->getClientOriginalName();

        Store::create([
            'store_name' => request()->store_name,
            'open' => request()->open,
            'close' => request()->close,
            'phone_store' => request()->phone_store,
            'address' => request()->address,
            'status_activation' => 0,
            'id_mitra' => Auth::user()->id,
            'id_kecamatan' => request()->id_kecamatan,
            'store_image' => $name,
        ]);

        $request->store_image->move(public_path('store_data/' . DB::getPdo()->lastInsertId() . '/image'), $name);
        return redirect('list-pengajuan-store')->with('success_update', 'Store has been added');
    }

    public function StoreInsertItem(Request $request, $id){
        $count = ItemStore::where('item_id', $request->product)->where('store_id', $id)->get();
        if($count->count() < 1){
            $bengkel = Store::find($id);
            $bengkel->item()->attach($request->product, ['price' => $request->price]);
            return redirect()->back()->with('success_update', 'Item Ditambahkan');
        }else{
            return redirect()->back()->withErrors(['Item Sudah Terdaftar']);
        }
    }

    public function itemManagementView($id){
        $data = Store::with('item')->where('id', $id)->first();
        return view('mitra.sparepartToBengkel.management-bengkel', [
            'data' => $data,
        ]);
    }

    public function itemManagementUpdate($item, $store, Request $request){
        $validated = $request->validate([
            'price' => 'required',
            'item' => 'required',
        ]);
        if(!$validated){
            return redirect()->back()
            ->withErrors($validated);
        }
        DB::table('item_store')->where('item_id', $item)->where('store_id', $store)->update(
            [
                'price' => $request->price,
            ]
        );
        return redirect()->back()->with('success_update', 'Item Diperbaharui');
    }

    public function itemManagementDetach($item, $store){
        $bengkel = Store::find($store);
        $bengkel->item()->detach($item, ['price' => request('price')]);
        return redirect()->back()->with('success_update', 'Item Dihapus');
    }
}
