<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

<<<<<<< HEAD
    protected $fillable = [
        'judul',
        'path',
    ];
=======
    protected $fillable = ['judul', 'path'];
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
}
