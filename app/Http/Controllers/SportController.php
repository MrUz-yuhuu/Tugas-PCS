<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SportController extends Controller
{
    public function index(){
        $collection = Http::get('https://www.thesportsdb.com/api/v1/json/1/eventspastleague.php?id=4328')['events'];
        return view('sport', compact('collection'));
    }
    public function details(){
        $collection = Http::get('https://www.thesportsdb.com/api/v1/json/1/lookupteam.php?id=133667')['teams'];
        return view('details', compact('collection'));
    }
    public function detailklub(){
        $collection = Http::get('https://www.thesportsdb.com/api/v1/json/1/lookupteam.php?id=133667')['teams'];
        return view('detailklub', compact('collection'));
    }
    public function jadwal(){
        $collection = Http::get('https://www.thesportsdb.com/api/v1/json/1/eventsnextleague.php?id=4328')['events'];
        return view('jadwal', compact('collection'));
    }
}
