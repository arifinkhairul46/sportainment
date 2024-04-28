<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Sesi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $order = Order::get_by_id($id);
        // dd($order_detail);
        return view('order', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $order = $request->all();
        

        $id_booking = 'SRA' . date('Ymd') . mt_rand(100, 999);
        $user = auth()->user();
        $fix_total = $order['fix_total'];
        $diskon = $order['fix_diskon'];
        $order = json_decode($order['data'], true);

        
        // return $no_hp;

        $order_create = Order::create([
            'id_booking' => $id_booking,
            'id_user' => $user->id,
            'nama_penyewa' => $user->name,
            'no_hp' => $user->no_hp,
            'dp' => 0,
            'tgl_dp' => date('Y-m-d'),
            'total_harga' => $fix_total,
            'diskon' => $diskon,
            'sisa_bayar' => $fix_total - $diskon,
            'status_bayar' => 1,
            'status_approval' => 1
        ]);

        foreach ($order as $item) {
            $order_detail = OrderDetail::create([
                $id_sesi = Sesi::where('sesi', $item['id_sesi'])->first(),
                $jam_mulai = $id_sesi->jam_mulai,
                $jam_selesai = $id_sesi->jam_selesai,

                'id' => $id_booking,
                'id_lapangan' => $item['id_lapang'],
                'id_sesi' => $item['id_sesi'],
                'jam_mulai' => $jam_mulai,
                'jam_selesai' => $jam_selesai,
                'tgl_mulai' => $item['tanggal'],
                'tgl_selesai' => $item['tanggal'],
                'total_harga_sewa' => $item['price'],
                'status_approval' => 1
            ]);

        }

        return redirect()->route('order.index')->with('success', 'Booking berhasil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function detail($id)
    {
        $order_detail = OrderDetail::get_detail_order_by_id($id);

        // dd($order_detail);
       
        return $order_detail;
    }
}
