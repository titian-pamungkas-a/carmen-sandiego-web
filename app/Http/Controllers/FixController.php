<?php

namespace App\Http\Controllers;

use App\Models\Criminal;
use App\Models\Fix;
use App\Models\Scenario;
use App\Models\Usercity;
use Illuminate\Http\Request;

class FixController extends Controller
{
    public function index(){
        $fixes = Fix::orderBy('id', 'asc')->get();
        $criminals = Criminal::all();
        return view('fixes.index', compact('fixes', 'criminals'));
    }

    public function create(){
        $criminals = Criminal::all();
        return view('fixes.create', compact('criminals'));
    }

    public function store(Request $request){
        Fix::create($request->all());
        return redirect()->route('fixes')->with('success', 'Scenario berhasil ditambahkan');
    }

    public function show(string $id){
        $fixes = Fix::findOrFail($id);
        $cities = Usercity::all();
        $scenarios = Scenario::orderBy('order', 'asc')->where('fixesId', $id)->get();
        $criminals = Criminal::all();
        return view('fixes.show', compact('fixes', 'cities', 'scenarios', 'criminals'));
    }

    /* public function edit(string $id){
        $cities = Usercity::findOrFail($id);
        return view('cities.edit', compact('cities'));
    } */

    public function update(Request $request, string $id){
        $fixes = Fix::findOrFail($id);
        $fixes->update($request->all());
        return redirect()->route('fixes')->with('success', 'Kota telah diperbarui');
    }

    public function destroy(string $id){
        $fixes = Fix::findOrFail($id);
        $fixes->delete();
        return redirect()->route('fixes')->with('success', 'Scenario berhasil dihapus');
    }

    public function createcity(string $id){
        $cities = Usercity::all();
        $idint = (int) $id;
        return view('fixes.createcity', compact('cities', 'id'));
    }

    public function storecity(Request $request, string $id){
        Scenario::create($request->all());
        return redirect()->route('fixes.show', $id)->with('success', 'Kota berhasil ditambahkan pada Scenario');
    }

    public function editcity(string $id1, string $id2){
        $scenarios = Scenario::findOrFail($id2);
        $cities = Usercity::all();
        return view('fixes.editcity', compact('scenarios', 'cities', 'id1'));
    }

    public function updatecity(Request $request, string $id1, string $id2){
        $temp = $id1;
        $scenarios = Scenario::findOrFail($id2);
        $scenarios->update($request->all());
        return redirect()->route('fixes.show', $temp)->with('success', 'Kota pada skenario telah diperbarui');
    }
}
