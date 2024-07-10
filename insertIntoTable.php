<?php 
    echo "hello everyone lets start to create Database in mysql to php";

    //connect to the database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ravi";

    // create connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    echo "<br/>";
    if(!$conn){
        die("sorry we faild to connect: " . mysqli_connect_error() );
    }
    else{
        echo "database successfully connected <br/>";
    }

    // insert data in table
    $name = "aditi";
    $age = 22;
    $dest = "bihar";

    $sql = "INSERT INTO `phptrip` (`name`, `age`, `dest`) VALUES ('$name', '$age', '$dest')";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Insert data in table Successfully ";
    }
    else{
        echo " Not insert data in table Successfully" . mysqli_error($conn);
    }
?>