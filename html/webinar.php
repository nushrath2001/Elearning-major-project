<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];

    //  Database connection

    $conn = new mysqli('localhost','root','','ilearn');
    if($conn->connect_error){
        echo"$conn->connect_error";
        die('Connection failed : ' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into webinar(name, email, phone) values(?, ?, ?)");
        $stmt->bind_param("ssi", $name, $email, $phone);
        $execval = $stmt->execute();
        echo $execval;
        // header("Location: popregister.html");
        echo'<script>alert("Registered Successfully")</script>';
        $stmt->close();
        $conn->close();
    }
    ?>