<?php
     $stuId = $_POST['stuId'];
     $Name = $_POST['Name'];
     $f_content = $_POST['f_content'];
    

    //  Database connection

    $conn = new mysqli('localhost','root','','ilearn');
    if($conn->connect_error){
        echo"$conn->connect_error";
        die('Connection failed : ' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into feedback(stuId, Name, f_content) values(?, ?, ?)");
        $stmt->bind_param("iss", $stuId, $Name, $f_content);
        $execval = $stmt->execute();
        echo $execval;
        // header("Location: popregister.html");
        echo '<script>alert("Successfully")</script>';
        $stmt->close();
        $conn->close();
    }
   ?>
