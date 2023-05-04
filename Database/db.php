<?php

$movies_plots = [
  'movie_1' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas blanditiis minima, sint ut accusamus reprehenderit debitis error quasi laborum vero nobis in eum quam eveniet aspernatur repudiandae asperiores recusandae neque.",
  'movie_2' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, sit a atque excepturi ipsam quam dolore minima aperiam totam asperiores consequatur ad fuga doloremque illo rem repellat libero nemo laborum."
];

$movies_genres = [
  'movie_1' => ['fantasy', 'avventura', 'commedia'],
  'movie_2' => ['azione','thriller','fantascienza'],
];

$movies = [
  'movie_1' => new Movie("Dungeons & Dragons - L'onore dei ladri","IT",$movies_genres['movie_1'],"2023","img/d&d.jpg", 3.5 ,$movies_plots['movie_1']), 
  'movie_2' => new Movie("V per Vendetta","IT",$movies_genres['movie_2'],"2006","img/vendetta.jpg", 4.5, $movies_plots['movie_2']),
];