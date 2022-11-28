<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    array('Lakers - Warriors', '55-60'),
    array('Raptors - Nets', '55-60'),
    array('Suns - Heat', '55-60'),
    array('Rockets - Orlando', '55-60'),
    array('Pistons - Hornets', '55-60'),
];
// var_dump($partite);

foreach ($partite as $element) {
    echo 'Match: ' . $element[0];
    echo '<br>';
    echo 'Results: ' . $element[1];
    echo '<br>';
}
?>