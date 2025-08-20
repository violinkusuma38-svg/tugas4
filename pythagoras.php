<?php
echo "<h1>Teorema Pythagoras</h1>";

$a = 3;
$b = 4;
$c = sqrt(pow($a, 2) + pow($b, 2));

echo "<b>Rumus:</b> c = √(a² + b²) <br>";
echo "<b>Soal:</b> Sebuah segitiga siku-siku memiliki sisi a = $a cm dan sisi b = $b cm. Hitung sisi miring c.<br>";
echo "<b>Jawaban:</b> √($a² + $b²) = √(" . ($a*$a) . " + " . ($b*$b) . ") = $c cm";
?>
