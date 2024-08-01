<!-- 
    $GET, $POST = special variable used to collect data from an HTML from
                  data is sent to the file in the action attribute of <form>
                  <form action="some_file.php" method="get" >
    
    $_GET = Data is appended to the url
            Not secure
            Char limit
            Better for search page

    $_POST =Data is packed inside the body of the HTTP request
            More secure 
            No data limit 
            Better for submitting credentials 
 -->


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
      <form action="lecture4.php" method="post">
         <label for="name">Name</label>
         <br>
         <input type="text" name="name" id="name">
         <br>
         <label for="password">Password</label>
         <br>
         <input type="text" name="password" id="password">
         <br>
         <button type="submit">Save</button>
      </form>
 </body>
 </html>

 <?php

    $name = $_POST["name"];
    $password = $_POST["password"];

    echo"{$name} {$password}"

?>