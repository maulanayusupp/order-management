<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PembagianKomisi;
use App\Http\Requests;

class PembagianKomisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembagianKomisi = PembagianKomisi::orderBy('created_at','desc')->get();
        return view('pages.kelola-komisi.pembagian-komisi',compact('pembagianKomisi'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembagianKomisi = PembagianKomisi::findOrFail(decrypt($id));
        return view('pages.kelola-komisi.verifikasi-komisi', compact('pembagianKomisi'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembagianKomisi = PembagianKomisi::find($id);
        PembagianKomisi::find($id)->delete();
        \Flash::success('ID Pembagian Komisi: '. $pembagianKomisi->id .' Dibatalkan.');
        return redirect('kelola/pembagian-komisi');
    }
}
