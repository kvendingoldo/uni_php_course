<?php

$m = 30; // quantity of numbers. The m variable in the issue.
$p = 8; // quantity of numbers in the line. The p variable in the issue.
$c = 2; //

print "<table border='1' cellpadding='$p' cellspacing='$c'>";

// fastest way
for ($ind = 0; $ind < $m; ++$ind) {
    if ($ind % $p == 0){
        print "\t<tr>\n";
    }

    if ($ind % $c == 0){
        $number="<td><span style='color: red;'>$ind</span></td>";
    } elseif ($ind == $m-1) {
        $tmp = $p - $ind % $c;
        $number="<td colspan='$tmp'>$ind</td>";
    } else {
        $number="\t\t<td>$ind</td>\n";
    }

    print $number;
}
print "</table>\n";
