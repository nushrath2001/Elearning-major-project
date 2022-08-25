<?php
  $conn = new mysqli('localhost','root','','ilearn');
  if($conn->connect_error){
      echo"$conn->connect_error";
      die('Connection failed : ' . $conn->connect_error);
  }

?>

 <html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedbackadmin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../css/students.css">
</head>

<body>
    <nav>
        <img src="../images/logo.jpg" alt="">
        <div class="navigation">
            <ul>
                <li> <a href="../html/admindash.php"><b>Dashboard</b></a> </li>

                <li><a  href="../html/students.php"><b>Students</b></a></li>
                <li><a class="active" href=" "><b>Feedback</b></a></li>
                <li><a href="passchngadmin.php"><b>Change Password</b></a></li>
                <li><a href="index.html"><b>Logout</b></a></li>
            </ul>
        </div>
    </nav>
 

    <!-- table -->
        <div class="label">Feedback of Students</div>
       

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Feedback</th>
                
                </tr>
            </thead>
            <?php
        error_reporting(0);
        $query = "select * from feedback";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        // echo $result['Name'] ."  " .$result['email']."  " .$result['number'];
        if($total!=0)

        {
            // $result = mysqli_fetch_assoc($data);
            while($result= mysqli_fetch_assoc($data))
            {
                echo "
                <tr> 
                <td>" .$result['stuId'] ."</td>
                <td>" .$result['Name'] ."</td>
                <td>" .$result['f_content'] ."</td>
                ";
                


            }
        }
        ?>
           
          </table>

</body>

</html> 