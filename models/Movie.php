<?php

class Movie {
  public $title;
  public $genre;
  public $director;
  public int $releaseYear;

//construtto per obbligare ad inserire i valori titolo e genere
  function __construct($_title, $_genre){
    //salvo i valori ricevuti dal costruttore
    $this->title = $_title;
    $this->genre = $_genre;
  }

  function getFilmRating(){

    if($this->genre == 'Horror' ){
      return '16+' ;
    } else {
      return '12+';
    }
  
  }
  
  function getFullFilm(){
    return $this->title . $this->genre . $this->director . $this->releaseYear;
  }

}



?>