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
    <title>admindash</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../css/admindash.css">
</head>

<body>
    <nav>
        <img src="../images/logo.jpg" alt="">
        <div class="navigation">
            <ul>
                <li> <a class="active" href="#"><b>Dashboard</b></a> </li>
                <li> <a href="students.php"><b>Students</b></a> </li>
                <li><a href="feedbackadmin.php"><b> Feedbacks</b></a></li>
                <li><a href="passchngadmin.php"><b> Change Password</b></a></li>
                <li><a href="index.html"><b>Logout</b></a></li>
            </ul>
        </div>
    </nav>


    <section id="features">
        <h1>Admin Dashboard</h1>
        <p>Replenish man have thing gathering lights yielding shall you</p>
        <div class="fea-base">
            <div class="fea-box">
                <!-- <i class="fas fa-graduation-cap"></i> -->
                <h3>Courses</h3>
                <hr color=whitesmoke>
                <h2>9</h2>
                <hr color=whitesmoke>
                <!-- <p>Scholarship is provided for those who need for further education.</p> -->
            </div>
            <div class="fea-box">
                <!-- <i class="fas fa-file-certificate"></i> -->
                <h3>Students</h3>
                <hr color=whitesmoke>
                <h2>25</h2>
                <hr color=whitesmoke>
                <!-- <p>Advice or information provided by a person of experience to solve a problems.</p> -->
            </div>
            <div class="fea-box">
                <!-- <i class="fas fa-award"></i> -->
                <h3>Sold out</h3>
                <hr color=whitesmoke>
                <h2>2</h2>
                <hr color=whitesmoke>
                <!-- <p>Certificate that evidences all or part of performances and is registered in the name of clearing -->
                </p>
            </div>
        </div>
    </section>
    <!-- table -->
    <div class="label">Student Enrolled</div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Student Email</th>
            <th scope="col">Name</th>
            <th scope="col">Phone number</th>
        </tr>
        </thead>
        <!-- <tbody>
            <tr>
                <td>1</td>
                <td>syedahafsa@12@gmail.com</td>
                <td>2000</td>
                <td>25/06/2022</td>
                <td><button type="submit" class="btn" name=delete value="Delete">
                    <span class="material-symbols-outlined">
                        delete
                        </span></button></td>
            
            </tr>
            </tbody>
            <hr>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>syedahafsa@12@gmail.com</td>
                    <td>2000</td>
                    <td>25/06/2022</td>
                    <td><button type="submit" class="btn" name=delete value="Delete">
                        <span class="material-symbols-outlined">
                            delete
                            </span></button></td>
                
                </tr>
                </tbody>
                

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>syedahafsa@12@gmail.com</td>
                        <td>2000</td>
                        <td>25/06/2022</td>
                        <td><button type="submit" class="btn" name=delete value="Delete">
                            <span class="material-symbols-outlined">
                                delete
                                </span></button></td>
                            
                    
                    </tr>
                    </tbody> -->
                    <?php
        error_reporting(0);
        $query = "select * from signup";
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
                <td>" .$result['id'] ."</td>
                <td>" .$result['Name'] ."</td>
                <td>" .$result['email'] ."</td>
                <td>" .$result['number'] ."</td>
                ";


            }
        }
        ?>
           
          </table>

</body>

</html>   
            </table>



</body>

</html>