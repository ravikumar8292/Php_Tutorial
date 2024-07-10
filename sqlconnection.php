<?php 
    echo "hello everyone lets start to connect mysql to php";

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
?>