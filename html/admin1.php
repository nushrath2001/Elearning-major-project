<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <form action="" class="form" method="POST">
<h1>Admin Login</h1>


<input type="email" placeholder="Enter your Email Id" class="box" name="admin_email" required >

<input type="password" placeholder="Enter Your Password" class="box" name="admin_pass" required>
<input type="submit" id="submit" value="Login">

    </form>
</body>
</html>
<?php
   $admin_email = $_POST['admin_email'];
   $admin_pass = $_POST['admin_pass'];

   //Database connection 
   
   $conn = new mysqli('localhost','root','','ilearn');
   if($conn->connect_error){
       echo"$conn->connect_error";
       die('Connection failed : ' . $conn->connect_error);
   }else{
    $stmt = $conn->prepare("select * from admin where admin_email= ?");
    $stmt->bind_param("s" , $admin_email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows >0){
         $data = $stmt_result->fetch_assoc();
         if($data['admin_pass'] === $admin_pass) {
            // echo "<h2>Login Successfull </h2>";
            header("Location: admindash.php");
         } else {
            echo "<h2>Invalid Email or password </h2>";
         }
    // } else {
    //     echo "<h2>Invalid Email or password </h2>";
     }

}
?>