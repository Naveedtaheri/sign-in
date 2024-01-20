<?php


function GetUser($connection){
    $x="SELECT * FROM contact";

    $data=$connection->query($x);

    $users=[];

    while($d=$data->fetch_assoc()){
        $users[]=$d;

    }
    return $users;

}


function deleteuser($connection,$Name){
    $D="DELETE FROM contact where name='$Name'";

    $connection->query($D);


}






function getuse($connection){
    $z="SELECT * FROM signin";
    $c=$connection->query($z);

    $USER=[];
    while($r= $c -> fetch_assoc()){
        $USER[]=$r;

    }

    return $USER;
}



function login($connection,$email,$password){
    $s="SELECT * FROM signin WHERE email='$email' and password='$password'";
    $res=$connection->query($s);
    //  print_r($res);
    if($res->num_rows >0){

        $users;

        while($d=$res ->fetch_assoc()){
            $users=$d;
    
        }
        session_start();
        $_SESSION['access']['id']=$users['id'];
        $_SESSION['access']['name']=$users['name'];
        header('location:admin.php');
    }
}