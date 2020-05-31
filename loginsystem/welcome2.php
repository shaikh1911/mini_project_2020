<?php
include('dbconnection.php');

session_start();

 $password=$_POST['password'];
 $dec_password=md5($password);
 $useremail=$_POST['uemail'];


if(isset($_SESSION['uemail'])){
    echo "<h3>Hello ".$_SESSION['uemail']."</h3>";
    header("Location: ../home.php");
    //echo "<a href='index2.php'>Technical Wiki</a><br>";
    echo "<br><a href='logout2.php'><input type=button value=Logout name=logout></a>";

}
else{
    if($_POST['uemail']==$useremail && $_POST['password']==$password){
        $_SESSION['uemail']=$useremail;

        echo "<script>location.href='welcome2.php'</script>";

    }
    else{
        echo "<script>alert('username or password incorrect!')</script>";
        echo "<script>location.href='mylog.php'</script>";
    }
}