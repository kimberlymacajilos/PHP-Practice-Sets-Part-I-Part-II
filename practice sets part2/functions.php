<?php
    /**
     * Reads the list of words in the stop words english text file and returns it as an array converted in lowercase.
     * 
     * FILE_IGNORE_NEW_LINES is used to used to skip the newline at end of each array elements.
     * FILE_SKIP_EMPTY_LINES is use to skip empty lines in the file.
     * @return array_map An array of stop words english converted to lowercase.
     */
    function readStopWords(): array{
        $stopWords = file('stop_words_english.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return array_map('strtolower' $stopWords);
    }

    /**
     * Reads the user input from the form
     * 
     * @return empty string If the user did not input a text it will return an empty string.
     */

    function readUserInput(): string{
        return ($_SERVER["REQUEST_METHOD"] == "POST" ? $_POST['text'] : '');
    }
?>