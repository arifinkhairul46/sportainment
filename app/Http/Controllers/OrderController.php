<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
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
        // dd($order);
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
        $total_show = number_format($fix_total - $diskon);
        $dp = number_format(30/100 * $fix_total);
        $order = json_decode($order['data'], true);

        
        // return $no_hp;

        $order_create = Order::create([
            'id' => $id_booking,
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
                $lapangan = Lapangan::where('id', $item['id_lapang'])->first(),
                $nama_lapangan = $lapangan->nama,

                'id_booking' => $id_booking,
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

        $message = "Terimakasih $user->name telah melakukan pemesanan di Area Sportainment. Berikut detailnya:

        - Nama Penyewa: $user->name
        - ID Order : $id_booking
        - Hari, Tanggal : $order_detail->tgl_mulai
        - Jam Mulai : $order_detail->jam_mulai
        - Jam Selesai : $order_detail->jam_selesai
        - Jenis Lapangan: $nama_lapangan
        
    Total Biaya Sewa = *Rp. $total_show,-*
    DP 30% = Rp. $dp,-
        
    Silahkan lakukan pembayaran sewa melalui rekening :
    Bank Syariah Indonesia (BSI) 
    7700700237 
    A.n *SMP QLP Rabbani Bandung*
        
    Note: Booking DP minimal 30% dari total sewa dan akan di masukkan ke jadwal apabila sudah melakukan pembayaran dengan mengirimkan foto bukti transfer.";

        $send_notif = $this->send_notif('087885293721', $message);

        if ($send_notif) {
            return redirect()->route('order.index')->with('success', 'Booking berhasil');
        }

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
        // $order_detail = Order::get_by_id_detail($id);
        $order_detail = OrderDetail::get_detail_order_by_id($id);

        // dd($order_detail);
       
        return $order_detail;
    }

    public function get_order_detail_all () {
        $order_detail = OrderDetail::get_all_order_detail();
        // dd($order_detail);

        return $order_detail;
    }

    public function get_jadwal_per_hari($tgl) {
        $jadwal = OrderDetail::jadwal_per_hari($tgl);
        // dd($jadwal);        
        
        return $jadwal;

    }

    function send_notif ($no_wha, $message) {
        $dataSending = array();
        $dataSending["api_key"] = "VDSVRW87NW812KD7";
        $dataSending["number_key"] = "EP9028RqdDXPhPix";
        $dataSending["phone_no"] = $no_wha;
        $dataSending["message"] = $message;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.watzap.id/v1/send_message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($dataSending),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

    }
}
