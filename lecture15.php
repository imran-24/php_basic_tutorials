<?php 

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name= 'instagram_clone';

    try{
        $con = mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Cound not connect";
    }

    if($con){
        echo "connected";
    }


?>

<?php 

    $db_root = '';
    $db_databasename = "";
    $db_pass = '' ;
    
?>