<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 't_sewa_detail';

    protected $fillable = [
        'id',
        'id_lapangan',
        'id_sesi',
        'tgl_mulai',
        'tgl_selesai',
        // 'jam_mulai',
        // 'jam_selesai',
        'total_harga_sewa',
        'status_approval'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id');
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class, 'id');
    }

    public function sesi()
    {
        return $this->belongsTo(Sesi::class, 'id');
    }

}
