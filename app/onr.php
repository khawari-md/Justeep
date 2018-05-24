<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onr extends Model
{
    protected $fillable = [
        'nama_barang', 'deskripsi', 'harga', 'jumlah', 'waktu', 'kota', 'onr',
    ];
}
