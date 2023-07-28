<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(Request $request)
    {
        return view('dbguru.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    public function showProfilesiswa(Request $request)
    {
        return view('dbuser.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    public function showProfilekoor(Request $request)
    {
        return view('dbkor.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
