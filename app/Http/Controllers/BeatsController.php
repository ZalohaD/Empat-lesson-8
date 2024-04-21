<?php

namespace App\Http\Controllers;

use App\Models\Beat;
use Illuminate\Http\Request;

class BeatsController extends Controller
{
    public function index() {
        $beats = Beat::all();
        return view("beats.beats", ["beats" => $beats]);
    }

    public function getById($id) {
        $beat = Beat::findOrFail($id);
        return view('beats.beatById', ['beat' => $beat]);
    }

    public function account() {
        $premium = False;
        return view('beats.account', ['premium' => $premium]);
    }

    public function home() {
        return view('beats.home');
    }

    public function create()
    {
        return view('beats.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Beat::create([
            'name' => $request->name,
        ]);

        return redirect()->route('beats')->with('success', 'Success!');
    }
}
