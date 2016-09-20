<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\PembagianKomisi;
use App\Http\Requests;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('status','desc')->get();
        return view('pages.kelola-order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'instansi' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',            
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'nomor_telepon' => 'required',            
            'biaya_instalasi' => 'required',
            'biaya_bulanan' => 'required',
            'account_manager_id' => 'required',
        ]);
        $request['status'] = 'unpaid';
        Order::create($request->all());
        \Flash::success('Order oleh: ' . $request->get('first_name')." ". $request->get('last_name') .  ' dibuat.');
        return redirect('kelola/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail(decrypt($id));
        return view('pages.kelola-order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail(decrypt($id));
        return view('pages.kelola-order.verifikasi', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $this->validate($request, [
            'instansi' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',            
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'nomor_telepon' => 'required',            
            'biaya_instalasi' => 'required',
            'biaya_bulanan' => 'required',
            'account_manager_id' => 'required',
            // 'account_coordinator_id' => 'required',
            'komisi_instalasi_am' => 'required',
            'komisi_bulanan_am' => 'required',
            // 'komisi_instalasi_ac' => 'required',
            // 'komisi_bulanan_ac' => 'required',
            'status' => 'required',
        ]);
        $order->update($request->all());

        /* PEMBAGIAN KOMISI */
        $biaya_instalasi = $order->biaya_instalasi;
        $biaya_bulanan = $order->biaya_bulanan;
        $komisi_instalasi_am = $order->komisi_instalasi_am;
        $komisi_bulanan_am = $order->komisi_bulanan_am;
        $komisi_instalasi_ac = $order->komisi_instalasi_ac;
        $komisi_bulanan_ac = $order->komisi_bulanan_ac;
        $jumlah_komisi_instalasi_am = ($biaya_instalasi * $komisi_instalasi_am)/100;
        $jumlah_komisi_bulanan_am = ($biaya_bulanan * $komisi_bulanan_am)/100;
        $jumlah_komisi_instalasi_ac = ($biaya_instalasi * $komisi_instalasi_ac)/100;
        $jumlah_komisi_bulanan_ac = ($biaya_bulanan * $komisi_bulanan_ac)/100;     
        /* AKHIR PEMBAGIAN KOMISI */
        $pembagianKomisi = new PembagianKomisi;
        $pembagianKomisi->order_id = $order->id;
        $pembagianKomisi->account_manager_id = $order->account_manager_id;
        $pembagianKomisi->account_coordinator_id = $order->account_coordinator_id;
        $pembagianKomisi->biaya_instalasi = $order->biaya_instalasi;
        $pembagianKomisi->biaya_bulanan = $order->biaya_bulanan;
        $pembagianKomisi->komisi_instalasi_am = $order->komisi_instalasi_am;
        $pembagianKomisi->komisi_bulanan_am = $order->komisi_bulanan_am;
        $pembagianKomisi->komisi_instalasi_ac = $order->komisi_instalasi_ac;
        $pembagianKomisi->komisi_bulanan_ac = $order->komisi_bulanan_ac;
        $pembagianKomisi->jumlah_komisi_instalasi_am = $jumlah_komisi_instalasi_am;
        $pembagianKomisi->jumlah_komisi_bulanan_am = $jumlah_komisi_bulanan_am;
        $pembagianKomisi->jumlah_komisi_instalasi_ac = $jumlah_komisi_instalasi_ac;
        $pembagianKomisi->jumlah_komisi_bulanan_ac = $jumlah_komisi_bulanan_ac;
        $pembagianKomisi->save();

        \Flash::success('Order ID: '. $order->id . ' Diverifikasi. Dengan Status: ' . $request->get('status'));
        return redirect('kelola/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        Order::find($id)->delete();
        \Flash::success('Order ID: '. $order->id .' Dihapus.');
        return redirect('kelola/order');
    }
}
