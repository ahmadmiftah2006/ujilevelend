<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelas;
use App\Models\guru;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = guru::all();
        $kelas = kelas::all();

        return view('dbkor.tbguru.dashboard-table-kordinat-guru', compact('guru','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru= guru::all();
        $kelas = kelas::all();


        return view('dbkor.tbguru.formguru',compact(['guru','kelas']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = User::create([
            'role' => 'guru',
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
        ]);

        $guru = guru::create([
            'user_id' => $user->id,
            'kelas_id' => $request->input('kelas_id'),
            'nama' => $request->input('nama'),
            
        ]);

        // $input = $request->all();
        // guru::create($input);

        return redirect('/tableguru')
        ->with('success','student data created succesfully');

        // guru::create{
        //     'role' => 'guru'
        // }
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
        $guru = guru::findOrFail($id);
        $user = User::findOrFail($id);

        $guru->delete();
        $user->delete();

        return redirect('/tableguru')
        ->with('success','student data created succesfully');

    }
}
