<?php 
    echo "hello everyone lets start to connect mysql to php";

    //connect to the database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contactus";

    // create connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    echo "<br/>";
    if(!$conn){
        die("sorry we faild to connect: " . mysqli_connect_error() );
    }
    else{
        echo "database successfully connected";
    }

    $sql = "SELECT * FROM `contactme`";
    
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo "<br/>";
    echo $num;
    echo "record found in the database";
    echo "<br/>";
    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
            // echo var_dump($row);
            echo $row['sno'].' User name is '. $row['name'] . ' and email is '. $row['email'] . ' and description is '. $row['description'].' that is info of user ';
            echo "<br/>";
        }
    }
?>