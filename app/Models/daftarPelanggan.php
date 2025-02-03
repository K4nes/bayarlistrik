<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DaftarPelanggan extends Model
{
    use HasFactory;

    protected $table = 'daftar_pelanggan';
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;

    protected $fillable = [
        'no_meter',
        'nama_pelanggan',
        'alamat',
        'tgl_bayar',
        'id_tarif',
    ];

    // Generate id_pelanggan random antara 200000 dan 300000 sebelum disimpan
    protected static function booted()
    {
        static::creating(function ($model) {
            if (!$model->id_pelanggan) {
                $model->id_pelanggan = rand(200000, 300000);
            }
        });
    }
}
