<?php
if(isset($_POST['StudentName'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("Connection failed.");
    }
   //echo "Successful";
    
    $StudentName=$_POST['StudentName'];
    $EmailId=$_POST['EmailId'];
    $MobileNumber=$_POST['MobileNumber'];
    $Password=$_POST['Password'];

    $sql="INSERT INTO `Elearningwebsite`.`user` (  `username`, `password`) VALUES ('$username','$password',current_timestamp());";
    
    if($con->query($sql)==true){
        echo '<script>alert("Successfully created you account.")</script>';
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <link rel="stylesheet" href="./css/login.css">
  <script>
    function validateForm() {

      var password = document.RegForm.password.value;
      var username = document.RegForm.username.value;
      
      var format1 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
      var format2 = /[abcdefghijklmnopqrstuvwzyzABCDEFGHIJKLMNOPQRSTUVWXYZ]+/;
      var format3 = /[1234567890]+/;


      if (password == "") {
        alert("Enter Password");
        return false;
      }
      if (password != "") {
        if (format1.test(password) == false) {
          alert("Please Enter Numbers,Characters,Special Symbols (@,#,_)");
          return false;
        }
        if (format2.test(password) == false) {
          alert("Please Enter Numbers,Characters,Special Symbols (@,#,_)");
          return false;
        }
        if (format3.test(password) == false) {
          alert("Please Enter Numbers,Characters,Special Symbols (@,#,_)");
          return false;
        }
      }
      if (username == "") {
        alert("Enter Student Name");
        return false;
      }
     
      else {
        return true;
      }
    }
  </script>
</head>
<link rel="stylesheet" href="register.css">

<body>
<div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <a href="index.html"><input type="submit" value="Login" ></a>
            <div class="signup_link">
                Not a member? <a href="signup.html">Sign Up</a>
            </div>
        </form>
    </div>
</body>

</html>