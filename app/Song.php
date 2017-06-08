<?php

namespace App;

use App\Playlist;

class Song extends Model
{
  public function playlist()
  {
    return $this->belongsTo(Playlist::class);
  }
}
