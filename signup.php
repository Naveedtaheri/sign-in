<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sign-up.css?v=<?php echo time();?>">
</head>
<body>
<?php session_start();?>
<?php include "layout/db.php"?>
<?php include "layout/function.php"?>

<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];





    $a="INSERT INTO signin VALUES('','$name','$email','$password')";

    $connection->query($a);
    header('location:login.php');
}?>










<div class="background">
<div class="sign-up">
	<h1>Sign Up</h1>
<form action="signup.php" method='POST'>
<input type="text"placeholder='Name' name='name'>
<input type="email"placeholder='Email' name='email'>
<input type="password"placeholder='Password' name='password'>
<input type="submit" value='Sign Up' name='submit'>
<h5>Already a member?</h5>
<a href="login.php" id='login'>Sign In</a>


</form>
    </div>



</div>



</body>
</html>