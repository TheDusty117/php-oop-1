<?php

require_once './models/Movie.php';

$movie1 = new Movie();
$movie1->title = 'Inception';
$movie1->genre = 'thriller';
$movie1->director = 'Christopher Nolan';



var_dump($movie1);

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
  <h2>ciao php oop</h2>
</body>
</html>