<?php
require ('include/config.php');
// $conn=mysqli_connect("localhost","root","","gymdb");
if(isset($_POST["Submit"])){
  $firstname=$_POST["fname"];
  $lastname=$_POST["lname"];
  $email=$_POST["email"];
  // $mobile_no=$_POST["mobile"];
  $password=$_POST["password"];
  $state=$_POST["state"];
  $city=$_POST["city"];
  $address=$_POST["address"];
  
  $sql=" INSERT INTO `tbluser`(`fname`,`lname`,`email`,`mobile`,`password`,`state`,`city`,`address`)
         VALUES ('$firstname','$lastname','$email','42424','$password','$state','$city','$address')";
  
  if($dbh -> query($sql)){
       echo "<script>alert('Resgister Successfull..!!')</script>";
  }
  else{
    echo "<script>alert('Password is Wrong')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ce7e77912.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>member</title>
</head>
<body>
          <div class="nav">
            <div class="back">
              <button onclick="history.back()" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i>Go Back</button>
              <h1>Member</h1>
            </div>   
         </div>
            <form class="column" method="post" action="#">
                
                <div class="box2">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" name="fname" id="fname" placeholder="Enter your fname">
                </div>

                 <div class="box2">
                  <label class="control-label">Last  Name</label>
                  <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter your lname">
                 </div>
                 <div class="box2">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="box2">
                  <label class="control-label">Mobile no</label>
                  <input class="form-control" type="number" name="mobile" id="mobile" placeholder="Enter your mobile no.">
                 </div>
                 <div class="box2">
                  <label class="control-label">Password</label>
                  <input class="form-control" type="text" name="password" id="password" placeholder="Enter your password ">
                 </div>
                 <div class="box2">
                  <label class="control-label">State</label>
                  <input class="form-control" type="text" name="state" id="state" placeholder="Enter your state">
                 </div>
                 <div class="box2">
                  <label class="control-label">City</label>
                  <input class="form-control" type="text" name="city" id="city" placeholder="Enter your City">
                 </div>
                 <div class="box2">
                  <label class="control-label">Address</label>
                  <input class="form-control" type="text" name="address" id="address" placeholder="Enter your Address">
                 </div>
                 <div class="sub">
                  <input  class="sub-control btn btn-success" type="Submit" name="Submit" id="Submit" class="btn btn-primary" value="Submit">
                 </div>
            </form>
</body>
</html>