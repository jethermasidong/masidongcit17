<?php
    $sentence = "Hello Students!, Welcome to CIT17 Web Information System.";

    echo "<h1>String Manipulation</h1>";
    echo "Original Sentence: $sentence<br>";
    echo "Number of characters: " . strlen($sentence) . "<br>";
    echo "Number of words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence) . "<br>";
?>
