<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    Protected $table = 'kamar';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_pasien',
        'id_dokter',
    ];
}
