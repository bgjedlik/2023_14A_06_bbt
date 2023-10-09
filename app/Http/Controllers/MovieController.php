<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index(){

        $episodes = DB::table('episodes')->get();
        //dd($episodes);
        return view('movie.index',[
            'episodes' => $episodes
        ]);
    }

    public function listByEpisode(Request $request){
       // dd($request->route('s'),$request->route('n'));
        $seasons = DB::table('episodes')
            ->select('season')
            ->distinct()
            ->get();

        //dd($seasons);
        if (!is_null($request->route('s'))) {
            $s = $request->route('s');
        } else {
            $s=1;
        }
        $numbers = DB::table('episodes')
            ->where('season','=',$s)
            ->get();
        // dd($numbers);
        return view('movie.episode',[
            'seasons' => $seasons,
            'numbers' => $numbers,
            's' => $s
        ]);
    }
}
