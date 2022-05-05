<?php

echo("Porsche <br>");
echo("Audi <br>");
echo('BMW <br>');
echo('Uno <br>');
echo('FIAT <br>');
echo('Fusca <br>');
echo('Marea <br>');


$carros = ['Porsche', 'Audi', 'BMW', 'Uno', 'Fiat', 'Fusca', 'Marea'];
foreach($carros as $carro){
    echo('<h1>' . $carro . '</h1> <hr>');
}