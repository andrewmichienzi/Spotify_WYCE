<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Playlist;
use Carbon\Carbon;
use  Illuminate\Contracts\Logging\Log;

class PlaylistController extends Controller
{

  public function index() {
    // $endDate = Carbon::createFromFormat('Y-m-d', '2017-6-10');

    // $i = 0;
    // while($i < 30){
    //   $date=$endDate->toDateString();
    //   $url = "https://grcmc.org/wyce/playlists/date/".$date.".json";
    //   $contents = file_get_contents($url);
      
    //   if($contents)
    //   {
    //     $json = json_decode($contents, true);
    //     $playlists = $json['data']['playlist'];
    //   }

      
    //   foreach($playlists as $playlist)
    //   { 
    //     // Log::info('hi');
    //     // var_dump($playlist);
    //     $newPlaylist = new Playlist;
    
    //     $newPlaylist->processPlaylist($playlist);
    //   }
    //   $playlist = \App\Playlist::find(1);
    //   $song = $playlist->songs->get(1);
    //   $i++;
    //   $endDate->subDay();
    // }

    $playlists = Playlist::latest()->take(5)->get();
    return view('playlists.index', compact('playlists'));
  }

  public function create() {
    
  }
}
