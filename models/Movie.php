<?php

class Movie {
  public $title;
  public $genre;
  public $director;
  public int $releaseYear;

//construtto per obbligare ad inserire i valori titolo e genere
  function __construct($_title, $_genre){
    $this->title = $_title;
    $this->genre = $_genre;
  }

}



?>