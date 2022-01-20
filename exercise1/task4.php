<?php
$day = rand(0, 1000);

$day = $day % 7;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "это рабочий день\n";
        break;
    case 6:
    case 7:
        echo "это выходной день\n";
        break;
    default:
        echo "это неизвестный день\n";
}
