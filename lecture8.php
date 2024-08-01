<!-- 
    isset() = Returns True if a variable is declared and not null
    empty() = Returns True if a variable is not declared, false, null
-->

<?php 
    $username = "Imran";
    $name = "Imran";
    echo empty($name);
    echo isset($username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lecture8.php" method="post">
        <label for="username">
            Username
        </label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">
            Password
        </label>
        <br>
        <input type="text" name="password" id="password">
        <br>
        <input type="submit" name="login" value="Log in">
    </form>

    <form action="" method="post">
        <input type="text" name="input" id="input">
    </form>
</body>
</html>

<?php
    

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            echo "Fill all the fields";
        }
        else{
            foreach($_POST as $key => $value){
                echo "{$key} = {$value} <br>";
            }
        }
    }
?>