<?php
    $servername = '';
    $username = '';
    $password = '';
    $db_name = '';

    try{
        $conn = new PDO("mysqli:host=$servername;dbname:$db_name", $username, $password );
        //Set PDO error mode to exception
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo "Faild to connect to DB" .$e->getMessage();
    }


?>