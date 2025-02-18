<?php
    /**
     * Calculate the total price and return the result.
     * 
     * @param $items The listed items in array.
     * @return $total prices of $items.
     */
    function calcTotalPrice(array $items): int{
        $total = 0;
        foreach ($items as $item){
            $total += $item['price'];
        }
        return $total;
    }

    $items = [
        ['name' => 'Widget A', 'price' => 10],
        ['name' => 'Widget B', 'price' => 15],
        ['name' => 'Widget C', 'price' => 20],
    ];

    $total = calcTotalPrice($items);
    echo "Total price: $" . $total;

    echo "<br>";

    /**
     * Perform a series of string manipulations.
     * 
     * @param $string The given string.
     * @return string The modified $string.
     */
    function modifyString(string $inputString): string{
        $inputString = str_replace(' ', '', $inputString);
        return strtolower($inputString);
    }
    $string = "This is poorly written program with little structure and readability.";
    
    $modifiedString = modifyString($string);
    echo "\nModified string: " . $string;

    echo "<br>";

    /**
     * Check if a number is even or odd.
     * 
     * @param $number The number to check.
     * @return $result Indicates if the number is even or odd.
     */
    function oddOrEven($number){
        return ($number % 2 == 0) ? "The number $number is even." : "The number $number is odd.";
    }

    $result = oddOrEven(42);
    echo "\n" . $result;

    echo "<br>";

?>