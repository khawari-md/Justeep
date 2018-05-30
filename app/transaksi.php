<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'total_harga', 'rate',
    ];
    protected $primaryKey = 'onr_id';
 	public $timestamps = false;
}
