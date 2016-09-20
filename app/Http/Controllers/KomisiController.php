<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komisi;
use App\Http\Requests;

class KomisiController extends Controller
{
    public function komisi()
    {
        $komisis = Komisi::orderBy('komisi','asc')->get();
        return view('pages.kelola-komisi.komisi', compact('komisis'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $this->validate($request, [
            'komisi' => 'required',

        ]);
        Komisi::create($request->all());
        \Flash::success('Komisi sebesar: ' . $request->get('komisi') .  '% Ditambahkan.');
        return redirect('kelola/komisi/atur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komisi = Komisi::findOrFail(decrypt($id));
        return view('pages.kelola-komisi.ubah-komisi', compact('komisi'));
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
        $komisi = Komisi::findOrFail($id);
        $this->validate($request, [
            'komisi' => 'required',
        ]);
        $komisi->update($request->all());
        \Flash::success('Komisi ID: '. $komisi->id . ' Diubah.');
        return redirect('kelola/komisi/atur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komisi = Komisi::find($id);
        Komisi::find($id)->delete();
        \Flash::success('Komisi ID: '. $komisi->id .' dibatalkan.');
        return redirect('kelola/komisi/atur');
    }
}
