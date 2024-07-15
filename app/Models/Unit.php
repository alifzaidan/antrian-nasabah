<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
<<<<<<< HEAD
    ];
=======
        'jumlah_teller',
        'jumlah_cs',
        'running_text',
        'video_display',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
}
