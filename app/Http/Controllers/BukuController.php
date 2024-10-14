<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuku;
use App\Http\Requests\UpdateBuku;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {   
        $databuku = Buku::all();
        return view('index')->with([
            'databuku' => $databuku // Pastikan ini sesuai dengan yang digunakan di view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuku $request)
    {
        $validate = $request->validated();
        $buku = new Buku();
        $buku->nama = $request->txtnama;
        $buku->jenis = $request->txtjenis;
        $buku->penerbit = $request->txtpenerbit;
        $buku->tahun = $request->txttahun;
        $buku->save();

        return redirect('/')->with('msg','Input Buku Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Buku::find($id);
        return view('editbuku')->with([
            'txtid'=>$data->id,
            'txtnama'=>$data->nama,
            'txtjenis'=>$data->jenis,
            'txtpenerbit'=>$data->penerbit,
            'txttahun'=>$data->tahun
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuku $request, $id)
    {
        $data = Buku::find($id);
        $data->nama = $request->txtnama;
        $data->jenis = $request->txtjenis;
        $data->penerbit = $request->txtpenerbit;
        $data->tahun = $request->txttahun;
        $data->save();

        return redirect('/')->with('msg','Update Buku "'.$data->nama.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Buku::find($id);
        $data ->delete();

        return redirect('/')->with('msg','Judul "'.$data->nama.'" Berhasil Dihapus');
    }
}
