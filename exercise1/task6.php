<?php
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo"<td>";
        if (($j % 2) == 1) {
            if (($i % 2) == 1) {
                echo " ( ". $i * $j . " ) "."</td>";
            } else {
                echo " ". $i * $j . " ". "</td>";
            }
        } else {
            if (($i % 2) == 0) {
                echo " [ ". $i * $j . " ] ". "</td>";
            } else {
                echo " ". $i * $j . " ". "</td>";
            }
        }
        echo " ";
        if ($j == 10) {
            echo "\n";
        }
    }
    echo "</tr>";
}
