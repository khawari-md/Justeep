<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onr extends Model
{
	// protected $table = 'onr';

    protected $fillable = [
        'nama_barang', 'deskripsi', 'harga', 'jumlah', 'waktu', 'kota', 'onr', 'kategori'
    ];

 	public $timestamps = false;   
}
