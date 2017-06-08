<?php

namespace App;

use App\Song;
use Carbon\Carbon;

class Playlist extends Model
{
  public function songs()
  {
    return $this->hasMany(Song::class);
  }

  // public function playlist()
  // {
  //   return $this->belongsTo(Playlist::class);
  // }
  
// 
//   Adding song to playlist from json
  public function addSong($track)
  {
    $this->songs()->create([
        'track_title' => $track['track_title'],
        'live_performance' => $track['live_performance'],
        'image' => !isset($track['image']) || is_null($track['image']) ? 'NULL' : $track['image'],
        'album' => $track['album'],
        'artist' => $track['artist'],
        'website' => !isset($track['website']) || is_null($track['website']) ? 'NULL' : $track['website'],
        'facebook' => !isset($track['facebook']) || is_null($track['facebook']) ? 'NULL' : $track['facebook'],
        'release_year' => !isset($track['release_year']) || is_null($track['release_year']) ? 'NULL' : $track['release_year'],
        'record_label' => !isset($track['record_label']) || is_null($track['record_label']) ? 'NULL' : $track['record_label']
    ]);
  }

  public static function processPlaylist($playlist){
    
    $dateTime = Carbon::parse($playlist['date'].' '. $playlist['time'])->toDateTimeString();
    
    if( ! Playlist::playlistExists($playlist['programmer'], $dateTime))
    { 
    
    $this->programmer=$playlist['programmer'];
    
    $this->date=$dateTime;
    $this->save();

    foreach($playlist['sets'] as $set)
    {
      foreach($set['tracks'] as $song)
      {
        $this->addSong($song);
      }
    }
  }
  }

  
  public static function playlistExists($programmer, $dateTime) {
    $count = \App\Playlist::where(['programmer'=>$programmer, 'date'=>$dateTime])->get()->count();
    if($count > 0)
      return true;
      
      return false;
    }
   }
