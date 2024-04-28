<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 't_sewa';

    protected $fillable = [
        'id_booking',
        'id_user',
        'nama_penyewa',
        'no_hp',
        'dp',
        'tgl_dp',
        'total_harga',
        'diskon',
        'sisa_bayar',
        'status_bayar',
        'status_approval'

    ];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'id_booking');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public static function get_all ()
    {
        $data = Order::all();

        return $data;
    }

    public static function get_by_id ($id)
    {
        $data = Order::where('id_user', $id)->get();

        return $data;
    }

    public static function get_by_id_detail ($id)
    {
        $data = static::with(['orderDetail'])
            ->where('id_booking', $id)
            ->get();

        return $data;
    }
    
}
