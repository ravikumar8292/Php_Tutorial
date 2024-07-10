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
        echo "database successfully connected";
    }
    
    // create Table
    $sql = 'CREATE TABLE `phptrip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `age` INT(3) NOT NULL , `dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))';

   $result = mysqli_query($conn, $sql);
   echo "<br/>";
   if($result){
      
       echo "Table Created Successfully ";
   }
   else{
       echo "Table not created successfully " . mysqli_error($conn);
   }
?>