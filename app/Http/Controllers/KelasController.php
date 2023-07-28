<?php

namespace App\Http\Controllers;

use App\Models\kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = kelas::all();
        return view('dbkor.tbkelas.dashboard-table-kordinat-kelas',  compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelass = kelas::all();

        return view('dbkor.tbkelas.formkelas',compact('kelass'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
        ]);
        $kelass = kelas::create([
            'kelas' => $request->input('kelas'),
        ]);


        return redirect('/tablekelas')
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
    public function destroy(string $id)
    {
        $kelass = kelas::findOrFail($id);

        $kelass->delete();

        
        return redirect('/tablekelas')
        ->with('success','student data created succesfully');
    }
}
