if(isset($_POST["fname"]))
{
    $first_name= '';
    $last_name= '';
    $e-mail= '';
    $password= '';
    $contactno= '';

    $fname_error= '';
    $lname_error= '';
    $e-mail_error= '';
    $pwd_error= '';
    $cno_error= '';
    $captcha_error= '';
    if(empty($_POST["fname"]))
    {
        $fname_error= 'First name is required';
    }
    else{
        $first_name= $_POST['fname'];
    }
    if(empty($_POST["lname"]))
    {
        $lname_error= 'Last name is required';
    }
    else{
        $last_name= $_POST['lname'];
    }
    if(empty($_POST["email"]))
    {
        $e-mail_error= 'Email is required';
    }
    else{
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $e-mail_error= 'Invalid Email';
        }
        else{
        $e-mail= $_POST['email'];
        }
    }
    if(empty($_POST["password"]))
    {
        $pwd_error= 'password is required';
    }
    else{
        $password= $_POST['password'];
    }
    if(empty($_POST["contact"]))
    {
        $cno_error= 'Contact is required';
    }
    else{
        $contactno= $_POST['contact'];
    }
    if(empty($_POST['g-recaptcha-response']))
    {
        $captcha_error= 'Captcha is required';
    }
    else{
         $secret_key= '6LdxivwUAAAAALzSzWegjFOMY2qgCM02bDjdYakO';
         $response= file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
         $response_data= json_decode($response);

         if(!$response_data->success)
         {
             $captcha_error= 'Captcha verification failed';
         }
    }
    if($fname_error== '' &&
    $lname_error== '' &&
    $e-mail_error== '' &&
    $pwd_error== '' &&
    $cno_error== '' &&
    $captcha_error== '')
    {
        $data = array(
            'success'   => true,
        );
    }
    else{
        $data = array(
            'fname_error'   =>  $fname_error,
            'lname_error'   =>  $lname_error,
            'e-mail_error'  =>  $e-mail_error,
            'pwd_error'     =>  $pwd_error,
            'cno_error'     =>  $cno_error,
            'captcha_error' =>  $captcha_error 
        );
    }

    echo json_encode($data);
}