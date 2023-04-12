<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;
use function Ramsey\Uuid\v6;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('user.usersparepart', [
            'title' => 'Categories',
            'categories' => $categories
        ]);
    }

    public function brakes()
    {
        $items = Item::get()->where('category_id', '=', 1);
        return view('items.index', [
            'items' => $items,
            'title' => 'Brake List'
        ]);
    }

    public function brakeDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 1)
            ->where("items.id", "=", $id->id)
            ->get();
        return view('items.details', [
            'item' => $id,
            'data' => $data,
        ]);
    }

    public function suspension()
    {
        $items = Item::get()->where('category_id', '=', 2);
        return view('items.index', [
            'items' => $items,
            'title' => "Suspension List"
        ]);
    }

    public function suspensionDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 2)
            ->where("items.id", "=", $id->id)
            ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data,
        ]);
    }

    public function drivetrain()
    {
        $items = Item::get()->where('category_id', '=', 3);
        return view('items.index', [
            'items' => $items,
            'title' => "Drivetrain List"
        ]);
    }

    public function drivetrainDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 3)
            ->where("items.id", "=", $id->id)
            ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data,
        ]);
    }

    public function electronics()
    {
        $items = Item::get()->where('category_id', '=', 4);
        return view('items.index', [
            'items' => $items,
            'title' => "Electronic List"
        ]);
    }

    public function electronicsDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 4)
            ->where("items.id", "=", $id->id)
            ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data,
        ]);
    }

    public function exhaust()
    {
        $items = Item::get()->where('category_id', '=', 5);
        return view('items.index', [
            'items' => $items,
            'title' => "Exhaust List"
        ]);
    }

    public function exhaustDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 5)
            ->where("items.id", "=", $id->id)
            ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data,
        ]);
    }

    public function oil()
    {
        $items = Item::get()->where('category_id', '=', 6);
        return view('items.index', [
            'items' => $items,
            'title' => "Oil List"
        ]);
    }

    public function oilDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 6)
            ->where("items.id", "=", $id->id)
            ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data
        ]);
    }

    public function wheels()
    {
        $items = Item::get()->where('category_id', '=', 7);
        return view('items.index', [
            'items' => $items,
            'title' => "Wheels List"
        ]);
    }

    public function wheelsDetails(Item $id)
    {
        $data =
        DB::table("items")
        ->join("item_store", function($join){
            $join->on("items.id", "=", "item_store.item_id");
        })
        ->join("stores", function($join){
            $join->on("item_store.store_id", "=", "stores.id");
        })
        ->join("categories", function($join){
            $join->on("items.category_id", "=", "categories.id");
        })
        ->select("items.name", "stores.store_name", "stores.id", "item_store.price")
        ->where("items.id", "=", $id->id)
        ->where("categories.id", "=", 7)
        ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data,
            'title' => 'Wheels Detail'
        ]);
    }

    public function tools()
    {
        $items = Item::get()->where('category_id', '=', 8);
        return view('items.index', [
            'items' => $items,
            'title' => "Tool List"
        ]);
    }

    public function toolsDetails(Item $id)
    {
        $data =
            DB::table("items")
            ->join("item_store", function ($join) {
                $join->on("items.id", "=", "item_store.item_id");
            })
            ->join("stores", function ($join) {
                $join->on("item_store.store_id", "=", "stores.id");
            })
            ->select("items.name", "item_store.price", "stores.id", "stores.store_name", "items.brand")
            ->where("items.category_id", "=", 8)
            ->where("items.id", "=", $id->id)
            ->get();

        return view('items.details', [
            'item' => $id,
            'data' => $data
        ]);
    }
}
