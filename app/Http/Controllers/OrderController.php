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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'nomor_telepon' => 'required',
            'instansi' => 'required',
            'biaya_instalasi' => 'required',
            'biaya_bulanan' => 'required',
            'account_manager_id' => 'required',
            'account_coordinator_id' => 'required',
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'nomor_telepon' => 'required',
            'instansi' => 'required',
            'biaya_instalasi' => 'required',
            'biaya_bulanan' => 'required',
            'account_manager_id' => 'required',
            'account_coordinator_id' => 'required',
            'komisi_instalasi_am' => 'required',
            'komisi_bulanan_am' => 'required',
            /*'komisi_instalasi_ac' => 'required',
            'komisi_bulanan_ac' => 'required',*/
            'account_coordinator_id' => 'required',
            'status' => 'required',
        ]);

        $order->update($request->all());

        $pembagianKomisi = new PembagianKomisi;


        \Flash::success('Order ID: '. $order->id . ' Diverifikasi.');
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
