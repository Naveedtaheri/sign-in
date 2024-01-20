<?php include "layout/header.php"?>

<?php




if(!isset($_SESSION['access'])){
    header('location:login.php');
}





?>
<div class="navbar">

<a href="login.php?task=logout">
<i class="fa-solid fa-right-to-bracket fa-2xl"></i>
</a>


</div>






<?php

if(isset($_GET['task']) && $_GET['task']==='delete'){
    deleteuser($connection,$_GET['Name']);
}




$user= GetUser($connection);

?>


<div class="hero">

<table class="table">
    <thead>
        <!-- <th>ID</th> -->
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </thead>
   
    <tbody>
    <?php foreach($user as $users){?>
        <tr>
        <!-- <td><?php echo $users['id'] ?></td> -->
        <td><?php echo $users['Name'] ?></td>
        <td><?php echo $users['Email'] ?></td>
        <td><?php echo $users['Phone'] ?></td>
        <td><?php echo $users['Message'] ?></td>
        <td><a href="?Name=<?= $users['Name'];?> && task=delete">Delete</a></td>
        </tr>
        <?php }?>
    </tbody>

    
</table>
</div>















<?php include "layout/footer.php"?>