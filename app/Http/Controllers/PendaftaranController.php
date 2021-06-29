<?php

namespace App\Http\Controllers;

use PDF;
use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pendaftaran::all();
        return view('daftar.index',[
            'daftar' => Pendaftaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendaftaran::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat_lengkap' => $request->alamat_lengkap,
            'agama' => $request->agama,
            'asal_smp' => $request->asal_smp,
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('welcome')->with('success','Selamat, Anda Sudah Terdaftar Di SMK Semangat 45');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftar = Pendaftaran::find($id);
        $pdf = PDF::loadview('pdf',['daftar'=>$daftar]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('daftar.edit',[
            'daftar' => Pendaftaran::find($id)
        ]);
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
        Pendaftaran::where('id',$id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat_lengkap' => $request->alamat_lengkap,
            'agama' => $request->agama,
            'asal_smp' => $request->asal_smp,
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('daftar.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendaftaran::findOrFail($id)->delete();
        return back()->with('success', 'Data Sudah Dihapus');
    }
}
