<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function updatePersonalDetail(Request $request)
    {
        dd($request->all());
    }
}
