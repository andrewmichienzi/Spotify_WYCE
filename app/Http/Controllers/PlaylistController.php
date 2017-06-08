<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Playlist;
use Carbon\Carbon;

class PlaylistController extends Controller
{

  public function index() {
    /*$date="2016-12-06";
    $url = "https://grcmc.org/wyce/playlists/date/".$date.".json";
    $contents = file_get_contents($url);
    
    if($contents)
    {
      $json = json_decode($contents, true);
      $playlists = $json['data']['playlist'];
    }

    
    foreach($playlists as $playlist)
    { 
      $newPlaylist = new Playlist;
  
      $newPlaylist->processPlaylist('playlist');
    }*/
    $playlist = \App\Playlist::find(1);
    $song = $playlist->songs->get(1);
    return view('playlists.index', compact('playlist'));
  }

  public function create() {
    
  }
}
