<?php session_start();
?>

<?php
  $conn = new mysqli('localhost','root','','ilearn');
  if($conn->connect_error){
      echo"$conn->connect_error";
      die('Connection failed : ' . $conn->connect_error);
  }

  if(isset($_POST['submit'])){
     $email = $_POST['email'];
     $password = $_POST['password'];
     $new= $_POST['new'];

    $query = mysqli_query($conn,"select email, password  from signup where email = '$email'
     and password = '$password'");

     $num = mysqli_fetch_array($query);
     if($num>0){
        $conn= mysqli_query($conn,"update signup set password ='$new' where email ='$email'");
        $_SESSION['msg1'] = "Password Change Sucessfully!";
     }else{
        $_SESSION['msg2'] = "Password Don't Match!";

  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

  
    <section>
        <div class="container">
            <div class="cover">
                <div class="front">
                    <!-- <img src="../images/front.jpg" alt=""> -->
                </div>
            </div>
            <p style="color:red";><?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1'] ="";?></p>

            <form action="" class="form" method="post">
                
                            <input type="email" placeholder="Enter your Email" name="email" class="box"name="email"required>
                            
                             <input type="password" placeholder="Enter Old Password" name="password" class="box" name="password"required>
                            
                            <input type="password" placeholder="Enter New Password" name="new" class="box" required>
                            
                                <input type="submit" name="submit" value="Submit" id=""submit>
                            
            </form>