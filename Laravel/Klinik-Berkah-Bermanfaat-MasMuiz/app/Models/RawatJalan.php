<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user', 'no_bpjs', 'poli', 'dokter', 'waktu_konsul', 'no_rekam_medis', 'status'
    ];
}
