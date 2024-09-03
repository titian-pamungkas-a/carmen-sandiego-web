<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index(){
        $levels = Level::orderBy('levelCount', 'asc')->get();
        return view('levels.index', compact('levels'));
    }

    public function create(){
        return view('levels.create');
    }

    public function store(Request $request){
        Level::create($request->all());
        return redirect()->route('levels')->with('success', 'Level berhasil ditambahkan');
    }

    public function show(string $id){
        $levels = Level::findOrFail($id);
        return view('levels.show', compact('levels'));
    }

    public function edit(string $id){
        $levels = Level::findOrFail($id);
        return view('levels.edit', compact('levels'));
    }

    public function update(Request $request, string $id){
        $levels = Level::findOrFail($id);
        $levels->update($request->all());
        return redirect()->route('levels')->with('levels', 'Level telah diperbarui');
    }

    public function destroy(string $id){
        $levels = Level::findOrFail($id);
        $levels->delete();
        return redirect()->route('levels')->with('levels', 'Hubungan telah dihapus');
    }

    
}
