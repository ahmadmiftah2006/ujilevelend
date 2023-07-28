<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\walas;
use App\Models\layanan;
use App\Models\guru;
use App\Models\jadwal;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = jadwal::all();
        $walas = walas::all();
        $layanan_bk = layanan::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('dbuser.dashboard-table-siswa', 
        compact('jadwal','walas','layanan_bk','guru','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jadwal = jadwal::all();
        $walas = walas::all();
        $layanan_bk = layanan::all();
        $guru = guru::all();
        $siswa = siswa::all();
        return view('dbuser.formjadwal', compact('jadwal','walas','layanan_bk','guru','siswa'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'layanan_bk_id',
            'guru_id',
            'nama',
            'deskripsi',
            'walas_id',
            'tanggal_id',
            'hasil_konseling',
        ]);

        $jadwal = jadwal::create([
            'status' => 'pending',
            'layanan_bk_id' => $request->input('layanan_bk_id'),
            'guru_id' => $request->input('guru_id'),
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'walas_id' => $request->input('walas_id'),
            'tanggal_id' => $request->input('tanggal_id'),
            'hasil_konseling' => 'pending',
        ]);

        return redirect('/jadwalsiswa')->with('success', 'Jadwal created successfully.');
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
