<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;
    protected $table = "stores";
    protected $guarded = ['id', 'id_mitra', 'lat', 'long'];
    protected $fillable = [
        'store_name',
        'open',
        'close',
        'address',
        'phone_store',
        'status_activation',
        'id_mitra',
        'id_kecamatan',
        'store_image',
        'lat',
        'long'
    ];

    public function item()
    {
        return $this->belongsToMany(Item::class, 'item_store', 'store_id', 'item_id')->withPivot('price');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_mitra');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
