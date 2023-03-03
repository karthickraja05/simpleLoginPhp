<?php 

require_once 'session_msg.php';
require_once 'db.php';
require_once 'function.php';


if(!isset($_POST['submit'])){
      redirect('http://localhost/project/study/app1/','Please Login');
}

// convert those key into variable and assign values to it, also check null values
foreach($_POST as $key => $value){
      $value = trim($value);
      if($value === ''){
            redirect(
                  'http://localhost/project/study/app1/register.php',
                  "Please enter some value for ${key}"
            );
      }
      $$key = $value;
}

// check username present or not
$condition = " WHERE username = '$username'";
$response = runSelectQuery($condition);

if($response){
      redirect('http://localhost/project/study/app1/register.php','Username Already Present');
}

// check email present or not
$condition = " WHERE email = '$email'";
$response = runSelectQuery($condition);

if($response){
      redirect('http://localhost/project/study/app1/register.php','Email Already Present');
}

$file = $_FILES['image'];
$image_res = imageUpload($file);

if($image_res['status'] === 0){
      redirect('http://localhost/project/study/app1/register.php',$image_res['message']);
}

$image = $image_res['name'];

$insertQuery = "INSERT INTO `users` (`name`, `username`, `email`, `password`, `phonenumber`, `address`, `gender`, `image`, `created_at`, `updated_at`)
VALUES ('$name', '$username', '$email', '$password', '$phonenumber', '$address', '$gender', '$image', now(), now());";

$result = runInsertQuery($insertQuery);

if($result){
      redirect('http://localhost/project/study/app1/',"Successfully Registered. Please Login");
}else{
      redirect('http://localhost/project/study/app1/register.php',"Something Went Wrong...");
}



