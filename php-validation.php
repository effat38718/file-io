<?php
$firstName = $_POST['fname']; 

$lastName = $_POST['lname'];

$gender = $_POST['gender'];

$dob = $_POST['dob'];

$religion = $_POST['religion'];

$email = $_POST['email'];

$username = $_POST['userName'];

$password = $_POST['password'];

if(empty($firstName)){
    $firstName_error = 'please enter your first name';
}

if(empty($lastName)){
    $lastName_error = 'please enter your last name';
}

if(empty($gender)){
    $gender_error = 'please select your gender';
}

if(empty($dob)){
    $dob_error = 'please select your date of birth';
}

if(empty($religion)){
    $religion_error = 'please select your religion';
}

if(empty($email)){
    $email_error = 'please enter your email';
}

if(empty($username)){
    $username_error = 'please enter your username';
}

if(empty($password)){
    $password_error = 'please enter your password';
}

include('form-submission.php');

?>
