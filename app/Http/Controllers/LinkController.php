<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Link;
use App\Models\Usercity;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){
        $links = Link::orderBy('id', 'asc')->get();
        $cities = Usercity::all();
        return view('links.index', compact('links', 'cities'));
    }

    public function filter(string $id){
        $links = Link::orderBy('id', 'asc')->where('city1', $id)->orWhere('city2', $id)->get();
        $cities = Usercity::all();
        return view('links.index', compact('links', 'cities'));
    }

    public function create(){
        $cities = Usercity::all();
        return view('links.create', compact('cities'));
    }

    public function store(Request $request){
        Link::create($request->all());
        return redirect()->route('links')->with('success', 'Hubungan berhasil ditambahkan');
    }

    public function show(string $id){
        $links = Link::findOrFail($id);
        $cities = Usercity::all();
        return view('links.show', compact('links', 'cities'));
    }

    public function edit(string $id){
        $links = Link::findOrFail($id);
        $cities = Usercity::all();
        return view('links.edit', compact('links', 'cities'));
    }

    public function update(Request $request, string $id){
        $links = Link::findOrFail($id);
        $links->update($request->all());
        return redirect()->route('links')->with('links', 'Hubungan telah diperbarui');
    }

    public function destroy(string $id){
        $links = Link::findOrFail($id);
        $links->delete();
        return redirect()->route('links')->with('links', 'Hubungan telah dihapus');
    }

    public function getName(int $id){
        $cityName = City::find($id);
        return $cityName->name;
    }
}
