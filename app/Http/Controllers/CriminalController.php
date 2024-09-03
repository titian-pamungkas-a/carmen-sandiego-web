<?php

namespace App\Http\Controllers;

use App\Models\Criminal;
use App\Models\Religion;
use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function index(){
        $criminals = Criminal::orderBy('id', 'asc')->get();
        $hobbies = Religion::all();
        return view('criminals.index', compact('criminals', 'hobbies'));
    }
}
