 <?php
  $conn = new mysqli('localhost','root','','ilearn');
  if($conn->connect_error){
      echo"$conn->connect_error";
      die('Connection failed : ' . $conn->connect_error);
  }

?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="stylesheet" href="../css/stuprofile.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>My Profile</h2>
            <ul>
                <li><a href="indexstu.html"><i class="fas fa-home"></i>Home</a></li>
                <li><a class="active" href=""><i class="fas fa-user"></i>Profile</a></li>
                <!-- <li><a href="my course.html"><i class="fas fa-project-diagram"></i>My courses</a></li> -->
                <li><a href="feedback.html"><i class="fas fa-blog"></i>Feedback</a></li>
                <li><a href="passchngstu.php"><i class="fas fa-address-book"></i>Change Password</a></li>
                <li><a href="index.html"><i class="fas fa-map-pin"></i>Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="side">
        <table class="table" border="1">
            <caption align="top">My Details</caption>
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Phone No.</th>

                </tr>
            </thead>
    </div>
    <img src="../images/stuprofile.jpg" alt="">


     <?php
    error_reporting(0);
    $query = "select * from signup";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    echo "
             <tr>
             <td>" .$result['id'] ."</td> 
             <td>" .$result['Name'] ."</td>
            <td>" .$result['email'] ."</td>
            <td>" .$result['number'] ."</td>
            ";
             
    //  echo 
    //  <tr> $result['Name'] ."  "  .$result['email']."  " .$result['number'];
     if($total!=0)
    // {
    //     // $result = mysqli_fetch_assoc($data);
    //     while($result= mysqli_fetch_assoc($data))
    //     {
    //         echo "
    //         <tr> 
    //         <td>" .$result['Name'] ."</td>
    //         <td>" .$result['email'] ."</td>
    //         <td>" .$result['number'] ."</td>
    //         ";
             

    //     }
    // }
    ?> 


    </table>


</body>

</html>