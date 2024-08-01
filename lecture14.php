<!-- 
    SERVER = Super global variable contains headers, paths and script locations.
    the entries in this array are created by the web server
    shows nearly everything you need to know about the current web page env.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lecture14.php" method="post">
        <input type="radio" name="credit" value="visa">Visa
        <br>
        <input type="radio" name="credit" value="mastercard">mastercard
        <br>
        <input type="radio" name="credit" value="american express">american express
        <br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>

<?php 
    if(isset($_POST['confirm'])){
        if(isset($_POST['credit'])){
            echo $_POST['credit'];
        }
        else{
            echo "Please select an option";
        }
    }
    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }

?>