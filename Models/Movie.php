<?php

class Movie {

  public $title;
  public $language;
  public $genres;
  public $release_year;
  public $vote_avg;
  public $poster;
  public $plot;

  public function __construct($title, $language,array $genres, $release_year, $poster, $vote_avg = null, $plot = null) {
    $this->title = $title;
    $this->language = $language;
    $this->genres = $genres;
    $this->release_year = $release_year;
    $this->poster = $poster;
    $this->vote_avg = $vote_avg;
    $this->plot = $plot;
  }

  public function getOverview(){
    $overview = "
      Titolo: $this->title
      Lingua: $this->language
      Generi: ".join(', ',$this->genres)."
      Anno: $this->release_year
      Trama: $this->plot
      ";
    return $overview;
  }

}