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
        return array_map('strtolower', $stopWords);
    }

    /**
     * Reads the user input from the form.
     * 
     * @return empty string If the user did not input a text it will return an empty string.
     */

    function readUserInput(): string{
        return ($_SERVER["REQUEST_METHOD"] == "POST" ? $_POST['text'] : '');
    }

    /**
     * Tokenizes the text into an array words.
     * 
     * @param $text The input text from user that is going to be tokenized.
     * @return array|false If the user did not input text, it will not be tokenized otherwise it will be tokenized.
     * PREG_SPLIT_NO_EMPTY used to remove empty strings from the array.
     */
    function tokenization(string $text): array|false{
        $pattern = '/\W+/';
        return preg_split($pattern, strtolower($text), -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * Calculates the frequency of each word in the array words and ignores the common stop words.
     * 
     * @param $words Array words that is going to be calculated.
     * @param $stopWords Array stop words that is going to be ignored in calculation of frequency.
     * @return $countedWords It is an associative array where it has keys and values. The keys are the words that are not included in stop words, and the value is its number value.
     */
    function frequencyCalculation(array $words, array $stopWords): array{
        $countedWords = array();

        foreach ($words as $word){
            if(!in_array($word, $stopWords)) {
                $countedWords[$word] = isset($countedWords[$word]) ? $countedWords[$word] + 1:1;
            }
        }
        return $countedWords;
    }

    /**
     * Sorts the list of associative array counted words by frequency in ascending or descending order.
     * 
     * @param $countedWords The words that is going to be sorted.
     * @param $sortOrder The order of the chosen sort of user.
     * @return $countedWords Associative array that has keys(words) and values(frequency).
     */
    function sorting(array $countedWords, string $sortOrder){
        $sortOrder == 'asc' ? asort($countedWords) : arsort($countedWords);
        return $countedWords;
    }

?>