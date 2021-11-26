<?php

namespace App\Http\Controllers;

use App\Models\Pulang;
use Illuminate\Http\Request;


class PulangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pulang = pulang::latest()->paginate(5);

        return view('pulang.index',compact('pulang'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pulang.create');

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
            'kepulangan'=>'required',

        ]);

        pulang::create($request->all());
        return redirect()->route('pulang.index')
                        ->with('success', 'berhasil menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pulang  $pulang
     * @return \Illuminate\Http\Response
     */
    public function show(Pulang $pulang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pulang  $pulang
     * @return \Illuminate\Http\Response
     */
    public function edit(pulang $pulang)
    {
        return view('pulang.edit', compact('pulang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pulang  $pulang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pulang $pulang)
    {
        $request->validate([
            'nis'=>'required',
            'kepulangan'=>'required',
        ]);

        //$request('waktu_masuk') = datetime('yyyy/mm/dd hh:mm:ss', strtotime($request('waktu_masuk')));
        $pulang->update($request->all());
        return redirect()->route('pulang.index')
                        ->with('success', 'berhasil update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pulang  $pulang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulang $pulang)
    {

        $pulang->delete();

        return redirect()->route('pulang.index')
                        ->with('success', 'berhasil hapus!');
    }
}
