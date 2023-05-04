<?php
class Movie {

  public $title;
  public $language;
  public $genre;
  public $release_year;
  public $vote_avg;
  public $poster;
  public $plot;

  public function __construct($title, $language, $genre, $release_year, $poster, $vote_avg = null, $plot = null) {
    $this->title = $title;
    $this->language = $language;
    $this->genre = $genre;
    $this->release_year = $release_year;
    $this->poster = $poster;
    $this->vote_avg = $vote_avg;
    $this->plot = $plot;
  }

  public function getOverview(){
    $overview = "
      Titolo: $this->title
      Lingua: $this->language
      Genere: $this->genre
      Anno: $this->release_year
      Trama: $this->plot
      ";
    return $overview;
  }

}

$movie_1_plot = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas blanditiis minima, sint ut accusamus reprehenderit debitis error quasi laborum vero nobis in eum quam eveniet aspernatur repudiandae asperiores recusandae neque.";
$movie_2_plot = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, sit a atque excepturi ipsam quam dolore minima aperiam totam asperiores consequatur ad fuga doloremque illo rem repellat libero nemo laborum.";

$movie_1 = new Movie("Dungeons & Dragons - L'onore dei ladri","IT","fantasy","2023","movie_1_poster_link", 3.5 ,$movie_1_plot);
$movie_2 = new Movie("V per Vendetta","IT","azione","2006","movie_2_poster_link", 4.5, $movie_2_plot);

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
      ".var_dump($movie_1)."
      <br>
      ".var_dump($movie_2)."
      Versione che sfrutta il method getOverview:
      ".$movie_1->getOverview()."
      <br>
      ".$movie_2->getOverview()."
    </pre>"
  ?>
</body>

</html>