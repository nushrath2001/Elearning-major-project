<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

    //  Database connection

    $conn = new mysqli('localhost','root','','ilearn');
    if($conn->connect_error){
        echo"$conn->connect_error";
        die('Connection failed : ' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(name, email, phone, subject, message) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $name, $email, $phone, $subject, $message);
        $execval = $stmt->execute();
        echo $execval;
        // header("Location: popregister.html");
       echo '<script>alert("Registered Successfully")</script>';
        $stmt->close();
        $conn->close();
    }
    ?>