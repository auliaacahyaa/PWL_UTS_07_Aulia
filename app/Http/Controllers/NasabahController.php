<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $nasabahs = Nasabah::where('nama', 'LIKE', '%' . request('search') . '%') ->paginate(5);
            return view('Nasabah.index', ['nasabah' => $nasabah]);
        }else{
            //fungsi eloquent menampilkan data menggunakan pagination
            // $Nasabah = Nasabah::all(); // Mengambil semua isi tabel
            $nasabah = Nasabah::orderBy('Nim', 'desc')->paginate(5);
            return view('nasabah.index', compact('nasabah'))
            ->with('i', (request()->input('page', 1) - 1) * 5);   
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Nasabah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan valNimasi data
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'Tanggal_Lahir' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
            'No_Handphone' => 'required',
            'Email' => 'required',
        ]);
        
        //fungsi eloquent untuk menambah data
        Nasabah::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('Nasabah.index')->with('success', 'Nasabah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Nim
     * @return \Illuminate\Http\Response
     */
    public function show($Nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Nasabah
        $Nasabah = Nasabah::find($Nim);
        return view('Nasabah.detail', compact('Nasabah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Nim
     * @return \Illuminate\Http\Response
     */
    public function edit($Nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Nasabah untuk diedit
        $Nasabah = Nasabah::find($Nim);
        return view('Nasabah.edit', compact('Nasabah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Nim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nim)
    {
        //melakukan validasi data
            $request->validate([
                'Nim' => 'required',
                'Nama' => 'required',
                'Tanggal_Lahir' => 'required',
                'Kelas' => 'required',
                'Jurusan' => 'required',
                'No_Handphone' => 'required',
                'Email' => 'required',
            ]);
   
        //fungsi eloquent untuk mengupdate data inputan kita
            Nasabah::find($Nim)->update($request->all());
   
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('Nasabah.index')->with('success', 'Nasabah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Nim
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nim)
    {
        //fungsi eloquent untuk menghapus data
            Nasabah::find($Nim)->delete();
            return redirect()->route('Nasabah.index')-> with('success', 'Nasabah Berhasil Dihapus');
    }
}
