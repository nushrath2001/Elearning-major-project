 <?php session_start();
?>

<?php
  $conn = new mysqli('localhost','root','','ilearn');
  if($conn->connect_error){
      echo"$conn->connect_error";
      die('Connection failed : ' . $conn->connect_error);
  }

  if(isset($_POST['submit'])){
     $admin_email = $_POST['admin_email'];
     $admin_pass = $_POST['admin_pass'];
    $new= $_POST['admin_new'];

    $query = mysqli_query($conn,"select admin_email, admin_pass  from admin where admin_email = '$admin_email'
     and admin_pass = '$admin_pass'");

     $num = mysqli_fetch_array($query);
     if($num>0){
        $conn= mysqli_query($conn,"update admin set admin_pass ='$new' where admin_email ='$admin_email'");
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
    <link rel="stylesheet" href="../css/passwordchange.css">


</head>

<body>

<p style="color:red";><?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1'] ="";?></p>

    <form action="" class="form" method="POST">
        <h1>Change Password</h1>

        <input type="email" placeholder="Enter your Email" class="box" name="admin_email" required>

        <input type="password" placeholder="Enter Old Password" class="box" name="admin_pass" required>

        <input type="password" placeholder="Enter New Password" name="admin_new" class="box" required>

        <input type="submit" name="submit" value="Submit" id="submit">

    </form>
</body>

</html>