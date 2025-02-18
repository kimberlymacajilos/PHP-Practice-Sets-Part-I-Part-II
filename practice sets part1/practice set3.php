<?php
    $matrix1 = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90]
    ];

    $row = 0;
    $col = 0;

    $rowsnum = count($matrix1);
    $colsnum = count($matrix1[0]);

    echo "<h1>Even Numbers</h1> <ul>";

    while ($row < $rowsnum){
        while ($col < $colsnum){
            if($matrix1[$row][$col] % 2 == 0) {
                echo "<li>" . $matrix1[$row][$col] . " " . "</li>";
            }
            $col++;
        }
        $row++;
        $col = 0;
    }

    echo "</ul>";
?>