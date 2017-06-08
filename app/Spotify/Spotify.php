<?php

namespace App\Spotify;

class Spotify
{
  protected $client_id;
  protected $secret;
  
  public function __construct($client_id, $secret)
  {
    $this->client_id = $client_id;
    $this->secret = $secret;
  }
  
  public function client_id(){
    return $this->client_id;
  }
  public function secret(){
    return $this->secret;
  }
}