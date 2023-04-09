<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mk = MataKuliah::all();
        return view('mata_kuliah.mata_kuliah')
            ->with('mk', $mk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mata_kuliah.create_mata_kuliah')
            ->with('url_form', url('/mata_kuliah'));
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
            'semester' => 'required|int',
            'sks' => 'required|int',
            'dosen' => 'required|string|max:50'
        ]);
        $data = MataKuliah::create($request->except(['_token']));
        //jika data berhasil ditambahkan, maka akan kembali ke halaman utama
        return redirect('mata_kuliah')
            ->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mata_kuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mata_kuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mata_kuliah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mata_kuliah = MataKuliah::find($id);
        return view('mata_kuliah.create_mata_kuliah')
            ->with('mk', $mata_kuliah)
            ->with('url_form', url('/mata_kuliah/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataKuliah  $mata_kuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50,' . $id,
            'semester' => 'required|int',
            'sks' => 'required|int',
            'dosen' => 'required|string|max:50'
        ]);

        $data = MataKuliah::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('mata_kuliah')
            ->with('success', 'Mata Kuliah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliah  $mata_kuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliah::where('id', '=', $id)->delete();
        return redirect('mata_kuliah')
            ->with('success', 'Mata Kuliah Berhasil Dihapus');
    }
}
