<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'tbl_antrian';

    protected $fillable = [
        'tanggal',
        'no_antrian',
        'status',
        'waktu_panggilan'
    ];
}
