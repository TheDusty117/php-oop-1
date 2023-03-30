<?php

require_once './models/Movie.php';

//grazie alla classe, che funge da prototipo, creo un nuovo oggetto
//inserendovi cio' che io decido
$movie1 = new Movie('Inception','Thriller');
// $movie1->title = 'Inception';
// $movie1->genre = 'thriller';
$movie1->director = 'Christopher Nolan';
$movie1->releaseYear = 2010;


$movie2 = new Movie('Alien','Horror');
// $movie2->title = 'Alien';
// $movie2->genre = 'Horror';
$movie2->director = 'Ridley Scott';
$movie2->releaseYear = 1979;


var_dump($movie1, $movie2);
var_dump($movie1->getFilmRating());
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop</title>
</head>
<body>
  <div>
    <h2>
      <?php echo $movie1->getFullFilm() ?>
    </h2>
  </div>
</body>
</html>