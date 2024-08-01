<!-- associative array = an array made of key=> value pair -->
<?php
    $friends = array(
        "Imran" => 'Single',
        "misbah" => 'Mingle',
    );

    foreach($friends as $key => $value){

    }
?>

<?php 
    $friends = array(
        "Imran" => "single",
        "Misbah" => "in a relationship",
        "Tasnim" => "in a relationship",
        "Jerin" => "married"
    );
    $friends["Maisha"] = "in a relationship";

    $names = array_keys($friends);
    $status = array_values($friends);
    array_pop($friends);
    array_shift($friends);
    // foreach($names as $name){
    //     echo $name . "<br>";
    // }
    // foreach($status as $view){
    //     echo $view . "<br>";
    // }
    foreach($friends as $key => $value){
        echo "{$key} is {$value}.<br>";
    }



    $name = "Jhon";
    $$name = "Deo";
    echo $name . "<br>";
    echo $$name . "<br>";
    echo ${"Jhon"} . "<br>";

    const age = 12;
    define("username", 'Imran');
    echo age;
    echo username;

    $animes = array(
        'action' => 'one piece',
        'adventure' => 'hunter x hunter',
        'comedy' => 'jintama'
    );

    array_reverse($animes);
    array_pop($animes);
    foreach($animes as $anime){
        echo $anime . "<br>";
    }
?>