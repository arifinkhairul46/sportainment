<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLapangan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'm_jenis_lapang';
}
