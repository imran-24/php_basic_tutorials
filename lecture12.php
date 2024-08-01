<!-- 
    cookies = Information about a user stored in a user's web-browser.
              targeted advertisements, browsing performances and other 
              non-sensitive data

              To delete a cookie set the time to minus 0
 --> 

<?php
    setcookie("fev_food", "Pizza", time() - 0, '/');
    setcookie("name", "imran", time() - 0, '/');
    setcookie('age', '20', time() + (86400 * 3), '/');
    setcookie('password', 'imransyam1956', time() + (86400), '/');
    setcookie('username', 'imran1232', time() + (86400 * 2), '/');
    setcookie('father', 'fazlul haque', time() + (86400 * 4), '/');
    setcookie('roll', '1921731', time() + (921121 * 2), '/');
    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE['age'])){
        echo "You are {$_COOKIE['age']} years old";
    }
    else{
        "I don't know your age";
    }
?>