<?php

namespace App\Models;

use App\Models\Search;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    use Search;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function store()
    {
        return $this->belongsToMany(Store::class,'item_store','item_id','store_id')->withPivot('price');
    }

    protected $searchable = [
        'name',
    ];
}
