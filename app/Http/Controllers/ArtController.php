<?php

namespace App\Http\Controllers;
use App\Models\Art;
use App\Models\Usercity;

use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index(){
        $arts = Art::orderBy('id', 'asc')->get();
        $cities = Usercity::all();
        return view('attribute.arts.index', compact('arts', 'cities'));
    }

    public function filter(string $id){
        $arts = Art::orderBy('id', 'asc')->where('cityId', $id)->get();
        $cities = Usercity::all();
        return view('attribute.arts.index', compact('arts', 'cities'));
    }

    public function create(){
        $cities = Usercity::all();
        return view('attribute.arts.create', compact('cities'));
    }

    public function store(Request $request){
        Art::create($request->all());
        return redirect()->route('arts')->with('success', 'Kesenian berhasil ditambahkan');
    }

    public function show(string $id){
        $arts = Art::findOrFail($id);
        $city = Usercity::findOrFail($arts->cityId)->name;
        return view('attribute.arts.show', compact('arts', 'city'));
    }

    public function edit(string $id){
        $arts = Art::findOrFail($id);
        $citi = Usercity::findOrFail($arts->cityId);
        $cities = Usercity::all();
        return view('attribute.arts.edit', compact('arts', 'citi', 'cities'));
    }

    public function update(Request $request, string $id){
        $arts = Art::findOrFail($id);
        $arts->update($request->all());
        return redirect()->route('arts')->with('arts', 'Kesenian telah diperbarui');
    }

    public function destroy(string $id){
        $arts = Art::findOrFail($id);
        $arts->delete();
        return redirect()->route('arts')->with('arts', 'Kesenian telah dihapus');
    }

}
