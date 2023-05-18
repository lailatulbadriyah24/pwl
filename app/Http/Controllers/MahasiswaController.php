<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //yang semula Mahasiswa::all, diubah menjadi with() yang menyatakan relasi
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('nim', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', [
            'mahasiswa' => $mahasiswa,
            'paginate' => $paginate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswa.create_mahasiswa',[
            'kelas' => $kelas,
            'url_form' => url('/mahasiswa')
        ]);
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
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswa,nim',
            'nama'=>'required|string|max:50',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=> 'required|digits_between:6,15'
        ]);

        $mahasiswa = new MahasiswaModel;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->foto = $image_name;
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');
        $mahasiswa->kelas_id = $request->get('kelas_id');
        $mahasiswa->save();

        //jika data berhasil ditambahkan, maka akan kembali ke halaman utama
        return redirect('mahasiswa')
            ->with('success','Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data berdasarkan nim mahasiswa
        //code sebelum dibuat relasi --> $mahasiswa = MahasiswaModel::find($nim);
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();

        return view('mahasiswa.detail', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan nim mahasiswa untuk diedit
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswa.edit', compact('mahasiswa', 'kelas'), ['url_form' => url('/mahasiswa/'. $id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' =>'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required|digits_between:6,15',
        ]);

        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        if ($mahasiswa->foto && file_exists(storage_path('app/public' . $mahasiswa->foto))) {
            Storage::delete(['public/' . $mahasiswa->foto]);
        }

        $image_name = $request->file('image')->store('images', 'public');

        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->foto = $image_name;
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');
        $mahasiswa->kelas_id = $request->get('kelas_id');
        $mahasiswa->save();
        
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
        ->with('success','Mahasiswa Berhasil Dihapus');
    }
}
