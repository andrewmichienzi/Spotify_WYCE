<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SessionController extends Controller
{
  public function index()
  {
    return view('session.index');
  }
  
  public function create()
  {
    $response_type="code";
    $redirect_uri="http://localhost:8000/playlists/";
    $spotify = resolve('App\Spotify\Spotify');
    
    return redirect ('https://accounts.spotify.com/authorize?client_id='.$spotify->client_id().'&response_type='.$response_type.'&redirect_uri='.$redirect_uri);
  }
}
