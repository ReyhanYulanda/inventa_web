<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_sales',
        'kunjungan',
        'tanggal',
        'jumlah',
        'status',
    ];
}
