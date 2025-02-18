<?php
//practice set 1 part 1
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    if ($side1 > 0 && $side2 > 0 && $side3 > 0) {
        $s = ($side1 + $side2 + $side3) / 2;
        $area_of_triangle = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));

        echo "<h2>Area of the Triangle: " . number_format($area_of_triangle, 2) . "</h2>";
    } else {
        echo "<h2>Please enter valid side lengths.</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area of triangle calculator</h1>
    <form method="POST" action="pracset1_pt1.php">
        <fieldset>
            <label for="">
                Side1:
                <input type="number" name="side1">
            </label>
            <br>
            <label for="">
                Side2:
                <input type="number" name="side2">
            </label>
            <br>
            <label for="">
                Side3
                <input type="number" name="side3">
            </label>
            <br>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>