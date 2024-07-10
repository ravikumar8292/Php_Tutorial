<?php

    // database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contactus";

    $conn = mysqli_connect($servername,$username,$password,$database);

    echo "<br/>";
    if(!$conn){
        echo "Database not connected <br/>";
    }
    else{
        echo "Database connected! <br/>";
    }

    // update the data in database
    
    $sql = "UPDATE `contactme` SET `name`='AD' Where `sno`= 4";
    $result = mysqli_query($conn,$sql);

    echo var_dump($result);

    $aff = mysqli_affected_rows($conn);
    echo "Number of affected rows ". $aff;
    echo "<br/> ";

    if($result){
        echo "we updated the record successfully <br/>";
    }
    else{
        echo "we could not updated the record successfully  <br/>";

    }


?>