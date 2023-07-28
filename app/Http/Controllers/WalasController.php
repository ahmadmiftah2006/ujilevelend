<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelas;
use App\Models\walas;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $walas = walas::all();
        $kelas = kelas::all();
        return view('dbkor.tbwalas.dashboard-table-kordinat-walas', compact('walas','kelas'));

        // return view('dbkor.tbwalas.dashboard-table-kordinat-walas',  compact('walas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $walas= walas::all();
        $kelas = kelas::all();
   
        return view('dbkor.tbwalas.formwalas',compact('walas','kelas'));

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
            'role' => 'walas',
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
        ]);

        $walas = walas::create([
            'user_id' => $user->id,
            'kelas_id' => $request->input('kelas_id'),
            'nama' => $request->input('nama'),
        ]);


        // $input = $request->all();
        // walas::create($input);
        // User::create($input);

        return redirect('/tablewalas')
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
        $walas = walas::findOrFail($id);
        $user = User::findOrFail($id);

        $walas->delete();
        $user->delete();


        return redirect('/tablewalas')
        ->with('success','student data created succesfully');

    }
}
