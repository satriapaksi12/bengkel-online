<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = "kota";
    protected $guarded = ['id'];

    public function kecamatan(){
        return $this->hasMany(Kecamatan::class);
    }
}
