<?php
    $username = "Imran Syam";
    $username = strtolower($username);
    echo $username . "<br>";
    $username = str_replace(" ", "", $username);
    echo $username . "<br>";
    $username = trim($username);
    $array = str_split($username);
    echo ($array) . "<hr>";
    
    foreach($array as $letter){
        echo $letter . "<br>";
    }

    echo strlen($username);
    $fname = substr($username, 0, 3);
    echo $fname;

?>