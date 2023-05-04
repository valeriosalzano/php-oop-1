<?php

require_once __DIR__."\Models\Movie.php";
require_once __DIR__."\Database\db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP</title>
</head>

<body>
  <?php
  echo
    "<pre>
      ".var_dump($movies['movie_1'])."
      <br>
      ".var_dump($movies['movie_2'])."
      Versione che sfrutta il method getOverview:
      ".$movies['movie_1']->getOverview()."
      <br>
      ".$movies['movie_2']->getOverview()."
    </pre>"
  ?>
</body>

</html>