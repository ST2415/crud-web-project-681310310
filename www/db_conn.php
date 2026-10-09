<?php
    $servername = "db";
    $username = "user";
    $password = "userpassword";
    $dbname = "my_crud_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }
    //echo"Connection successfully";
?>