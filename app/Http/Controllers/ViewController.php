<?php

namespace App\Http\Controllers;

use App\Models\Usercity;
use App\Models\Attribute;
use App\Models\CityAttribute;
use App\Models\Link;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $cities = Usercity::orderBy('id', 'asc')->get();
        return view('cities.index', compact('cities'));
    }

    public function create(){
        return view('cities.create');
    }

    public function store(Request $request){
        Usercity::create($request->all());
        return redirect()->route('cities')->with('success', 'Kota berhasil ditambahkan');
    }

    public function show(string $id){
        $cities = Usercity::findOrFail($id);
        $attributeName = CityAttribute::orderBy('attributeId', 'asc')->where('cityId', $id)->get();
        $links = Link::orderBy('id', 'asc')->where('city1', $id)->orWhere('city2', $id)->get();
        $attributes = Attribute::all();
        return view('cities.show', compact('cities', 'attributeName', 'links', 'attributes'));
    }

    public function edit(string $id){
        $cities = Usercity::findOrFail($id);
        return view('cities.edit', compact('cities'));
    }

    public function update(Request $request, string $id){
        $cities = Usercity::findOrFail($id);
        $cities->update($request->all());
        return redirect()->route('cities')->with('success', 'Kota telah diperbarui');
    }

    public function destroy(string $id){
        $cities = Usercity::findOrFail($id);
        $cities->delete();
        return redirect()->route('cities')->with('success', 'Kota telah diperbarui');
    }
}
