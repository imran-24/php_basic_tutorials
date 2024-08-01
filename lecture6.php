<!-- <?php
    $range = 10;
    for($i = 0; $i < $range; $i++){
        echo $i . "<br>";
    }

?> -->

<?php 
    $array = ["imran", false , 2];
    
    array_push($array, "Noman");
    array_pop($array);
    array_shift($array);
    $array = array_reverse($array);
    foreach ($array as $item){
        echo $item . "<br>";
    }
    $fruits = ["mango", 'pineapple', 'apple', 'orange', 'lichi'];
    foreach ($fruits as $fruit){
        echo $fruit . "<br>";
    }
    echo count($fruits);

    $list = [1, 2, 3, 4];
    array_push($list, 5);
    foreach($list as $item){
        echo $item;
    }
    
    array_pop($list);

    foreach($list as $item){
        echo $item;
    }
?>

