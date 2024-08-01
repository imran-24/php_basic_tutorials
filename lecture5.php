<!-- 
    previous lectures were on if else and && || ! operators
    That was the usual thats why i skipped it
 -->

 <!-- <?php
    $grade = "C";

    switch($grade){
        case "A":
            echo "Excelent";
            break;
        case "B":
            echo "Good";
            break;
        case "C":
            echo "Average";
            break;
        case "D":
            echo "Bad";
            break;
        case "F":
            echo "Failed";
            break;
    }
 ?> -->

<!-- 
    l => dependeing on what day you are executing the code. it will show that day
 -->

<?php
    $date = date("l");
    echo "{$date} <br>";

    switch($date){
        case "Thursday":
            echo "Its Thursday";
            break;
        case "Friday":
            echo "oh Yes Today is Friday";
            break;
        case "Sunday":
            echo "Today is a holiday";
            break;
    }

?>