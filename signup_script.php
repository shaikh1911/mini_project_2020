<?php
    require './includes/common.php';

    $fname = $_POST['fname'];
    $fname = mysqli_real_escape_string($con , $fname);

    $lname = $_POST['lname'];
    $lname = mysqli_real_escape_string($con , $lname);


    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);
    $password = md5($password);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con , $contact);

    $a=date('Y-m-d');

    $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $contact_regex = "/^[789][0-9]{9}$/";

    //check whether email already exists
    $select_query = "SELECT * from users WHERE email = '$email'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span class='red'>Email Already Exists</span>";
        header('location:./loginsystem/indexreg.php?m1='.$error);
    }else if(!preg_match($email_regex , $email)){
        $error = "<span class='red'>Incorrect Email Id</span>";
        header('location:./loginsystem/indexreg.php?m1='.$error);
    }else if(!preg_match($contact_regex , $contact )){
        $error = "<span class='red'>Incorrect Contact Number</span>";
        header('location:./loginsystem/indexreg.php?m2='.$error);
    }
    //if not then add to DB
    else{
        $insert_query = "INSERT INTO users (fname,lname,email,password,contactno,posting_date) VALUES ('$fname','$lname','$email','$password','$contact','$a')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:home.php');
    }



?>