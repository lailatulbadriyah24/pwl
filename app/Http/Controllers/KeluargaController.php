<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    //
    function index(){
        $kel = Keluarga::all();
        return view('keluarga.keluarga')
        ->with('kel',$kel);
    }

            /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('keluarga.create_keluarga')
            ->with('url_form', url('/keluarga'));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'nama' => 'required|string|max:50',
            'hubungan' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'pekerjaan' => 'required|string|max:50',
            'alamat' => 'required|string|max:50'
        ]);
        $data = Keluarga::create($request->except(['_token']));
        //jika data berhasil ditambahkan, maka akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success','Keluarga Berhasil Ditambahkan');
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keluarga = Keluarga::find($id);
        return view('keluarga.create_keluarga')
        ->with('kel', $keluarga)
        ->with('url_form', url('/keluarga/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50,'.$id,
            'hubungan' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'pekerjaan' => 'required|string|max:50',
            'alamat' => 'required|string|max:50'
        ]);
        
        $data = Keluarga::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('success', 'Keluarga Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keluarga::where('id', '=', $id)->delete();
        return redirect('keluarga')
        ->with('success','Keluarga Berhasil Dihapus');
    }
}