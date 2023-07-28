<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use App\Models\walas;
use App\Models\jadwal;
use App\Models\layanan;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class JadwalgController extends Controller
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
        return view('dbguru.dashboard-table-gr',compact('jadwal','walas','layanan_bk','guru','siswa'));
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
    public function store(Request $request)
    {
        //
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
        $jadwal= jadwal::findOrFail($id);
        // $user = User::findOrFail($id);
        // $kelas = kelas::all();
        return view('dbguru.editjadwal', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jadwal = jadwal::findOrFail($id);

        $request->validate([
            'deskripsi',
            'tanggal_konseling',
        ]);

        $input = $request->all();
        $jadwal->update($input);

        return redirect('/jadwalguru')->with('success', 'Jadwal updated successfully.');
    
        
    }

    public function updates(Request $request, $id)
    {
        $jadwal = jadwal::findOrFail($id);

       
    
        if ($jadwal && $jadwal->status === 'pending' && $jadwal->hasil_konseling === 'pending') {
            $jadwal->status = 'Accept';
            $jadwal->hasil_konseling = 'Selesai';
            $jadwal->save();
            return redirect('/jadwalguru')->with('success', 'Jadwal updated successfully.');
        } else {
            return redirect()->back()->with('message', 'Tidak ada pengajuan yang menunggu persetujuan atau ID pengajuan tidak valid.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cetak_pdf()
    {
    	$jadwal = jadwal::all();
 
    	$pdf = PDF::loadview('jadwal_pdf',['jadwal'=>$jadwal]);
    	return $pdf->download('laporan-jadwal-pdf');
    }
}
