<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "app/link.php";?>
    <link rel="stylesheet" href="css/style.css">
    <title>S$P 400</title>
</head>
<body>
    <div class="container">
        <h2><a href="#">S<span class="and-logo">$</span>P <span class="logo">400</span></a></h2>
    </div>
    <form action="login.php">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Confirm Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" name="submit" class="registerbtn" onclick="return promptPassword()">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
    </form>
</body>
<script src="javascript/scripr.js" crossorigin="anonymous"></script>
</html>

<?php
include "admin/connectDB.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = "user";
    $password = $_POST['psw'];
    $confirm_password = $_POST['psw-repeat'];

    if($password == $confirm_password){
        $password = sha1($password);
        $str = "INSERT INTO users(name, email, passwd,role) VALUES ('".$name."', '".$email."', '".$password."', '".$role."');";
        echo $str;
        mysqli_query($conn,$str);

    }else{

    }
}

?>