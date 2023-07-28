<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\jadwal;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();
        $kelas = kelas::all();
        return view('dbkor.tbsiswa.dashboard-table-kordinat-siswa', compact('siswa','kelas'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa= siswa::all();
        $kelas = kelas::all();
   
        return view('dbkor.tbsiswa.formsiswa',compact('siswa','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nipd' => 'required',
            'ttl' => 'required',
            'kelas_id' => 'required',
            'jk' => 'required',
            'phone' => 'required',
        ]);

        $user = User::create([
            'role' => 'siswa',
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
        ]);

        $siswa = siswa::create([
            'user_id' => $user->id,
            'kelas_id' => $request->input('kelas_id'),
            'nama' => $request->input('nama'),
            'nipd' => $request->input('nipd'),
            'ttl' => $request->input('ttl'),
            'jk' => $request->input('jk'),
        ]);

        // $input = $request->all();
        // siswa::create($input);

        return redirect('/tablesiswa')
                ->with('success','student data created succesfully');
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
    public function destroy( $id)
    {
        $siswa = siswa::findOrFail($id);
        $user = User::findOrFail($siswa->user_id);

        $siswa->delete();
        $user->delete();

        return redirect('/tablesiswa')
        ->with('success','student data created succesfully');

    }

    public function cetak_pdf()
    {
      $jadwal = jadwal::select('*')
                ->get();
    
      $pdf = PDF::loadView('siswa_pdf', ['jadwal' => $jadwal]);
      return $pdf->download('Laporan-Data-jadwal.pdf');
    }
}
