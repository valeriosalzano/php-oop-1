<?php

require_once __DIR__."/Models/Movie.php";
require_once __DIR__."/Database/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>PHP-OOP</title>
</head>

<body class="text-white bg-black">
  <div class="container">
    <header class="py-5">
      <h1 class="display-1 text-center fw-semibold"> PHP - OOP </h1>
    </header>
  
    <main>
      
      <div class="row row-cols-1 row-cols-md-2 g-4">
      
      <?php 
      foreach ($movies as $key => $movie) {?>

        <div class="col">
          <div class="card h-100 p-1 p-md-2 p-lg-3 text-bg-dark">
            <img src="<?php echo $movie->poster ?>" class="card-img-to" alt="<?php echo "poster $movie->title " ?>">
            <div class="card-body">
              <h5 class="card-title fw-semibold fs-3 my-3"><?php echo $movie->title ?></h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-bg-dark">
                  <strong>Lingua</strong>: <?php echo $movie->language ?>
                </li>
                <li class="list-group-item text-bg-dark">
                  <strong>Generi</strong>: <?php echo join(', ',$movie->genres) ?>
                </li>
                <li class="list-group-item text-bg-dark">
                  <strong>Anno</strong>: <?php echo $movie->release_year ?>
                </li>
                <li class="list-group-item text-bg-dark">
                  <strong>Media voti</strong>: <?php echo $movie->vote_avg ?>
                </li>
                <li class="list-group-item text-bg-dark">
                  <strong>Trama</strong>: <?php echo $movie->plot?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      
      <?php } ?>
      </div>
    </main>
  </div>
</body>

</html>