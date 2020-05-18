<?php
function generateRandomString($length = 10)
{
    $string = '';
    $vowels = array("ei", "ang", "ing", "ay", "ya", "yo", "ai", "eight", "aia", "er", "uyen", "ung", "ieu", "inh", "on", "ong");
    $consonants = array(
        'zh', 'th', 'tr', 'gi', 'gh', 'br', 'ch', 'nh', 'ng', 'sh', 'wh', 'str', 'ngh', 't', 'h'
    );
    srand((double)microtime() * 1000000);
    $max = $length / 2;
    for ($i = 1; $i <= $max; $i++) {
        $string .= $consonants[rand(0, 15)];
        $string .= $vowels[rand(0, 14)];
        $string .= '_';
    }

    return $string;
}