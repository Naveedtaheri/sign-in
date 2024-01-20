<?php include "layout/header.php"?>

<?php 
if(isset($_SESSION['access'])){
	header("location:login.php");
}




if(isset($_POST['login'])){
	login($connection,$_POST['email'],$_POST['password']);
	header('location:admin.php');
}


if(isset($_GET['task'])){
    if($_GET['task']==='logout'){
        session_destroy();
        header('location:login.php?title=login');
    }
  }


?>




<div class="background">

<div class="login-form">
	<h1>Sign In</h1>
<form action="login.php" method='POST'>
<input type="email" placeholder='Email Address' name='email'>
<input type="password" placeholder='Password' name='password'>
<input type="submit" value='Login' name='login'>
</form>
<h5>Don't have an account?</h5>
<a href="signup.php?title=signup" id='sign-up'>Sign Up</a>
</div>



























</div> 



<?php include "layout/footer.php"?>
