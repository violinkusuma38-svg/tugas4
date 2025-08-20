<?php
echo "<h1>Persamaan Kuadrat</h1>";

$A = 1;
$B = -3;
$C = -10;
$diskriminan = pow($B, 2) - (4 * $A * $C);

echo "<b>Rumus:</b> x = (-b ± √(b² - 4ac)) / 2a <br>";
echo "<b>Soal:</b> Carilah akar-akar dari persamaan kuadrat {$A}x² + ({$B})x + ($C) = 0.<br>";

if ($diskriminan >= 0) {
    $x1 = (-$B + sqrt($diskriminan)) / (2 * $A);
    $x2 = (-$B - sqrt($diskriminan)) / (2 * $A);
    echo "<b>Jawaban:</b> x1 = $x1, x2 = $x2";
} else {
    echo "<b>Jawaban:</b> Persamaan tidak punya akar real.";
}
?>
