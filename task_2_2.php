<?php
if (isset($_GET["number"])) {
    $i = $_GET["number"];
} else {
    $i = 0;
}

if (isset($_GET["page"])) {
    $page_number = $_GET["page"];
} else {
    $page_number = 0;
}

$x = $i - floor($i);
$j = $i * 10 + 1;
$h = $j + 9;
?>

<html>
<head>
    <title>task 2.2</title>
</head>
<body>
<table height="50%" width="50%" border="2" cellpadding="5" cellspacing="5">
    <tr height="250px">
        <td align="center">
            <h1>It's a page №
                <span>
                    <?php
                    if ($page_number == 0) {
                        echo $page_number + 1;
                    } else {
                        echo $page_number;
                    }
                    ?>
                </span>
            </h1>
        </td>
    </tr>
    <tr height="50px">
        <td align="center">
            <span>
                <?php
                if ($i >= 0 and is_numeric($i) and $x == 0) {
                    if ($i != 0) {
                        print "<a href = '?number=" . ($i - 1) . "&page=" . ($j - 1) . "'> << </a>";
                    }
                    for (; $j <= $h; $j++) {
                        if ($j == $page_number) {
                            print "$j ";
                        } else {
                            print "<a href='?number=" . $i . "&page=" . $j . "'>" . $j . " " . "</a>";
                        }
                    }
                    print "<a href = '?number=" . ($i + 1) . "&page=" . $j . "'> >> </a>";
                } else {
                    print "incorrect parameter";
                }
                ?>
            </span>
        </td>
    </tr>
</table>
</body>
</html>