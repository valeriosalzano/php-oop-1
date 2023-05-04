<?php

$movies_plots = [
  'movie_1' => "Un affascinante ladro e un gruppo di improbabili avventurieri realizzano il colpo del secolo recuperando una reliquia perduta. Ma le cose si mettono male quando il gruppo si imbatte nelle persone sbagliate.",
  'movie_2' => "In un'Inghilterra scampata alla guerra nucleare e oppressa da una dittatura poliziesca, una giovane donna, Evey viene salvata da un uomo dal volto coperto da una maschera. Il suo nome è V, vuole vendicarsi di coloro che l'hanno internato in un campo di concentramento e l'hanno sottoposto a crudeli esperimenti medici; inizia così la sua rivolta contro il potere, cercando di sollevare i suoi concittadini contro la tirannia. Scoperta la verità sul passato di V, Evey trova in sè stessa una nuova forza e diventa un'alleata nel piano dell'uomo per ristabilire la libertà."
];

$movies_genres = [
  'movie_1' => ['fantasy', 'avventura', 'commedia'],
  'movie_2' => ['azione','thriller','fantascienza'],
];

$movies = [
  'movie_1' => new Movie("Dungeons & Dragons - L'onore dei ladri","IT",$movies_genres['movie_1'],"2023","img/d&d.jpg", 3.5 ,$movies_plots['movie_1']), 
  'movie_2' => new Movie("V per Vendetta","IT",$movies_genres['movie_2'],"2006","img/vendetta.jpg", 4.5, $movies_plots['movie_2']),
];