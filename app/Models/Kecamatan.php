<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = "kecamatan";
    protected $guarded = ['id'];

    public function store(){
        return $this->hasMany(Store::class);
    }

    public function kota(){
        return $this->belongsTo(Kota::class, 'kota_id');
    }
}
