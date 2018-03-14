<?php

$n_min=2;
$m_min=3;

$n_max = 8;
$m_max = 7;

$x = 5;
$y = 5;
$k = 2;

$array = array();
$array[$x][$y] = $k;

echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=$n_min; $row <= $n_max; ++$row) {
    echo "<tr> \n";
    for ($col=$m_min; $col <= $m_max; ++$col) {
        $p = $col * $row;
        if ($row == $x and $col == $y) {
            $tmp = pow($p, $k);
            echo "<td>$tmp</td> \n";
        } else {
            echo "<td>$p</td> \n";
        }
    }
    echo "</tr>";
}

echo "</table>";