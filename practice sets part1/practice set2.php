<?php
    $arrfruits = ['mango', 'grapes', 'tangerine', 'langka', 'guava'];

    echo "<h1> Fruits </h1> <ol>";

    for ($i = 0; $i < count($arrfruits); $i++) {
        echo "<li>" . $arrfruits[$i] . "</li>"; 
    }

    echo "</ol>";
?>