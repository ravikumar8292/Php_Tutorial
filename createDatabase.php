<?php 
    echo "hello everyone lets start to create Database in mysql to php";

    //connect to the database

    $servername = "localhost";
    $username = "root";
    $password = "";

    // create connection
    $conn = mysqli_connect($servername,$username,$password);
    
    echo "<br/>";
    if(!$conn){
        die("sorry we faild to connect: " . mysqli_connect_error() );
    }
    else{
        echo "database successfully connected";
    }

    // create Database
    $sql = "CREATE DATABASE RAVI";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Database Created Successfully ";
    }
    else{
        echo "Database not created successfull" . mysqli_error($conn);
    }
?>