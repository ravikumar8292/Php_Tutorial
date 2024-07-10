<?php 

    // Database Created
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ravi";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        echo "Database not connected <br/>";
    }
    else{
        echo "Database connected successfully <br/>";
    }

    $sql = "DELETE FROM `phptrip` WHERE `dest` = 'bihar' ";
    $result = mysqli_query($conn, $sql);

    $aff = mysqli_affected_rows($conn);
    echo "affected number of rows ". $aff;
    echo "<br/>";

    if(!$result){
        echo "Data are not deleted from table <br/>";
    }else{
        echo "Data are deleted from table <br/>";
    }

?>