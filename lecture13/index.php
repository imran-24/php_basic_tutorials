<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">username</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <br>
        <input type="text" name="password" id="password">
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    
    $password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_INT);
    if(empty($password) || empty($_POST['username']) ){
        echo "Please check input";
    }
    else{
        $_SESSION['username'] = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $_SESSION['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_INT);
        // redirect
        header("Location: home.php");  
    }
    

    

?>