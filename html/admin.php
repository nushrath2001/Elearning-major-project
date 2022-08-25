<!-- <?php
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
?> -->