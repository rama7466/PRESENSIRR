<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;


class AbsenController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::latest()->paginate(5);

        return view('absen.index',compact('absen'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akhir = date("H:i");
        $awal = date("y-m-d");
        return view('absen.create')
        ->with($akhir = "akhir")
        ->with($awal = "awal");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'kedatangan'=>'required',
            'ket'=>'required',

        ]);

        Absen::create($request->all());
        return redirect()->route('absen.index')
                        ->with('success', 'berhasil menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        return view('absen.edit', compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        $request->validate([
            'nis'=>'required',
            'kedatangan'=>'required',
            'ket'=>'required',
        ]);

        //$request('waktu_masuk') = datetime('yyyy/mm/dd hh:mm:ss', strtotime($request('waktu_masuk')));
        $absen->update($request->all());
        return redirect()->route('absen.index')
                        ->with('success', 'berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {

        $absen->delete();

        return redirect()->route('absen.index')
                        ->with('success', 'berhasil hapus!');
    }
}
