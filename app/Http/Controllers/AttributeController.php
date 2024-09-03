<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\City;
use App\Models\Usercity;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(){
        $attributes = Attribute::orderBy('id', 'asc')->get();
        $cities = Usercity::all();
        return view('attributes.index', compact('attributes', 'cities'));
    }

    public function filter(string $id){
        $attributes = Attribute::orderBy('id', 'asc')->where('city1', $id)->orWhere('city2', $id)->get();
        $cities = Usercity::all();
        return view('attributes.index', compact('attributes', 'cities'));
    }

    public function create(){
        $cities = Usercity::all();
        return view('attributes.create', compact('cities'));
    }

    public function store(Request $request){
        Attribute::create($request->all());
        return redirect()->route('attributes')->with('success', 'Attribute berhasil ditambahkan');
    }

    public function show(string $id){
        $attributes = Attribute::findOrFail($id);
  
        return view('attributes.show', compact('attributes'));
    }

    public function edit(string $id){
        $attributes = Attribute::findOrFail($id);
        return view('attributes.edit', compact('attributes'));
    }

    public function update(Request $request, string $id){
        $attributes = Attribute::findOrFail($id);
        $attributes->update($request->all());
        return redirect()->route('attributes')->with('attributes', 'Kota telah dihapus');
    }

    public function destroy(string $id){
        $attributes = Attribute::findOrFail($id);
        $attributes->delete();
        return redirect()->route('attributes')->with('attributes', 'Hubungan telah dihapus');
    }

    public function getName(int $id){
        $cityName = City::find($id);
        return $cityName->name;
    }
}
