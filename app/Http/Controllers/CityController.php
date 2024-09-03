<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Clothe;
use App\Models\Criminal;
use App\Models\Destination;
use App\Models\Fix;
use App\Models\Food;
use App\Models\History;
use App\Models\House;
use App\Models\Level;
use App\Models\Link;
use App\Models\News;
use App\Models\Religion;
use App\Models\Scenario;
use App\Models\Song;
use App\Models\Town;
use App\Models\Usercity;
use App\Models\Attribute;
use App\Models\CityAttribute;

class CityController extends Controller
{
    function getcity(){
        $cities = City::all();
        return response()->json($cities);
    }

    function getusercity(){
        $usercities = Usercity::all();
        return response()->json($usercities);
    }
    
    function getFood(){
        $foods = Food::all();
        return response()->json($foods);
    }

    function getHouses(){
        $houses = House::all();
        return response()->json($houses);
    }

    function getArt(){
        $arts = Art::all();
        return response()->json($arts);
    }

    function getDestination(){
        $destinations = Destination::all();
        return response()->json($destinations);
    }

    function getClothe(){
        $clothes = Clothe::all();
        return response()->json($clothes);
    }

    function getHistory(){
        $histories = History::all();
        return response()->json($histories);
    }

    function getNew(){
        $news = News::all();
        return response()->json($news);
    }

    function getTown(){
        $towns = Town::all();
        return response()->json($towns);
    }

    function getSong(){
        $songs = Song::all();
        return response()->json($songs);
    }

    function getLink(){
        $links = Link::all();
        return response()->json($links);
    }

    function getLevel(){
        $level = Level::all();
        return response()->json($level);
    }

    function getFix(){
        $fix = Fix::all();
        return response()->json($fix);
    }

    function getScenario(){
        $scenario = Scenario::orderBy("order", "asc")->get();
        return response()->json($scenario);
    }

    function getCriminal(){
        $criminal = Criminal::all();
        return response()->json($criminal);
    }

    function getReligion(){
        $religion = Religion::all();
        return response()->json($religion);
    }

    function getAttribute(){
        $attribute = Attribute::all();
        return response()->json($attribute);
    }

    function getCityAttribute(){
        $cityAtt = CityAttribute::all();
        return response()->json($cityAtt);
    }
}
