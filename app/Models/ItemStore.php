<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemStore extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $guarded = ['id'];
    protected $table = 'item_store';

}
