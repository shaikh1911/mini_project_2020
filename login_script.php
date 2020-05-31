<?php
   require './includes/common.php';

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);
    $password = md5($password);

    $login_select_query = "SELECT id , email from users WHERE email = '$email' AND password = '$password'";
    $login_select_query_result = mysqli_query($con , $login_select_query) or die(mysqli_error($con));

    $total_rows_fetched = mysqli_num_rows($login_select_query_result);
    if($total_rows_fetched!=0){
        $row = mysqli_fetch_array($login_select_query_result);
        $_SESSION['email'] = $email;
        $_SESSION['id']=$row['id'];
        header("location:home.php");
    }
    else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:./loginsystem/indexlog.php?m1=".$error);
    }




//verify if user has filled the captcha correctly

if(isset($this->request->data['g-recaptcha-response']) && !empty ($this->request-> data['g-recaptcha-response']))

{

$secret = “6LdxivwUAAAAALzSzWegjFOMY2qgCM02bDjdYakO”;

//get verify response data from reCaptcha server

$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$this->request->data['g-recaptcha-response']);

$responseData = json_decode($verifyResponse);

if($responseData->success){

//reCaptcha API has validated the user as a human being. You can continue with validating user’s credentials here.

}

else{

// show error message if response from the reCaptcha server is not ‘Success’

$error = 'Robot verification failed, please try again.';

echo $error;

}

}

else{

//show error message if user has not clicked on reCaptcha box

$error = 'Robot verification is required to logged into the system. Please click on the reCaptcha box.';

echo $error;

}

?>