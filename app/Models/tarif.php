<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = 'tarifs';
    public $timestamps = false;

    protected $fillable = [
        'kode_tarif',
        'golongan',
        'daya',
        'tarif_per_kwh',
    ];

    public function daftarpelanggans()
    {
        return $this->hasMany(daftarpelanggan::class, 'id_tarif', 'id');
    }
}
