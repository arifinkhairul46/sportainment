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
        return $this->hasMany(OrderDetail::class, 'id');
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
}
