<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    // Boleh juga menggunakan middleware di dalam controller
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $guests = Guest::all();
        return view('index', compact('guests'));
    }

    public function form()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        $guest = Guest::create($request->all());
        return redirect()->route('guest');
    }
}
