<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\CityAttribute;
use App\Models\Usercity;
use Illuminate\Http\Request;

class CityAttributeController extends Controller
{
    public function index(){
        $cityattributes = CityAttribute::orderBy('id', 'asc')->get();
        $cities = Usercity::all();
        $attribute = Attribute::all();
        return view('cityattributes.index', compact('cityattributes', 'cities', 'attribute'));
    }

    public function filter(string $id){
        $cityattributes = CityAttribute::orderBy('id', 'asc')->where('city1', $id)->orWhere('city2', $id)->get();
        $cities = Usercity::all();
        return view('cityattributes.index', compact('cityattributes', 'cities'));
    }

    public function create(){
        $cities = Usercity::all();
        $attribute = Attribute::all();
        return view('cityattributes.create', compact('cities', 'attribute'));
    }

    public function store(Request $request){
        CityAttribute::create($request->all());
        return redirect()->route('cityattributes')->with('success', 'Attribute berhasil ditambahkan');
    }

    public function show(string $id){
        $cityattributes = CityAttribute::findOrFail($id);
        $cities = Usercity::all();
        $attribute = Attribute::all();
        return view('cityattributes.show', compact('cityattributes', 'cities', 'attribute'));
    }

    public function edit(string $id){
        $cityattributes = CityAttribute::findOrFail($id);
        $cities = Usercity::all();
        $attribute = Attribute::all();
        return view('cityattributes.edit', compact('cityattributes', 'cities', 'attribute'));
    }

    public function update(Request $request, string $id){
        $cityattributes = CityAttribute::findOrFail($id);
        $cityattributes->update($request->all());
        return redirect()->route('cityattributes')->with('cityattributes', 'Kota telah dihapus');
    }

    public function destroy(string $id){
        $cityattributes = CityAttribute::findOrFail($id);
        $cityattributes->delete();
        return redirect()->route('cityattributes')->with('cityattributes', 'Hubungan telah dihapus');
    }

    /* public function getName(int $id){
        $cityName = City::find($id);
        return $cityName->name;
    } */
}
