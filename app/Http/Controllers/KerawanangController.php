<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\walas;
use App\Models\layanan;
use App\Models\guru;
use App\Models\jadwal;
use App\Models\kerawanan;
use App\Models\kerawanang;


class KerawanangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $kerawanang = kerawanang::all();
        $jenis_kerawanan = kerawanan::all();
        $siswa = siswa::all();
        $walas = walas::all();
        $guru = guru::all();

        return view('dbguru.kerawanan.kerawanang-table', 
        compact('kerawanang','guru','siswa','walas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kerawanang = kerawanang::all();
        $jenis_kerawanan = kerawanan::all();
        $siswa = siswa::all();
        // $siswa = siswa::where("kelas_id",$id)->whereDoesntHave('kerawanang')->get();
        $walas = walas::all();
        $guru = guru::all();
        return view('dbguru.kerawanan.formkerawanang', compact('kerawanang','walas','jenis_kerawanan','guru','siswa'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nama_id',
            'nipd_id',
            'walas_id',
            'jenis_kerawanan_id',
            'hasil_konseling',
        ]);

        $kerawanang = kerawanang::create([
            'jenis_kerawanan_id' => $request->input('jenis_kerawanan_id'),
            'nipd_id' => $request->input('nipd_id'),
            'nama_id' => $request->input('nama_id'),
            'walas_id' => $request->input('walas_id'),
            'hasil_konseling' => $request->input('hasil_konseling'),
        ]);
//         LogActivity::create([
//             'Activity' => auth()->user()->name. ' telah mengubah data peta kerawanan bk'
// ]);

        return redirect('/kerawanan-guru')->with('success', 'Jadwal created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
