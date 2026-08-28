<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'nama',
        'no_hp',
        'email',
        'tanggal',
        'waktu',
        'jumlah_orang',
        'occasion',
        'no_meja',
        'catatan',
        'status',
    ];
}
