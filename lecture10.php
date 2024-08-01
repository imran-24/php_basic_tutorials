<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lecture10.php" method="post">
        <label for="username">username</label>
        <br>
        <input type="text" name="username" id="username">
        <br>

        <label for="age">age</label>
        <br>
        <input type="text" name="age" id="age">
        <br>

        <label for="email">email</label>
        <br>
        <input type="text" name="email" id="email">
        <br>

        <input type="submit" name="login" value="login">
        <br>
    </form>
</body>
</html>

<!-- sanitizing input -->
<?php
    if(isset($_POST['login'])){
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if(empty($age) ){
            echo "Please fill all the field";
        }
        else{
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            echo "Hello {$username}. You are {$age} years old. Your email address is {$email}";
        }
    }

?>

<!-- checking validity -->
<?php
    if(isset($_POST['login'])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if(empty($age)){
            echo "Age is not valid ";
        }
        elseif(empty($email)){
            echo "Email address is not valid ";
        }
        else{
            echo "You are {$age} years old. You're email address {$email}";
        }

    }

?>