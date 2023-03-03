<?php 

require_once 'session_msg.php';
require_once 'db.php';
require_once 'function.php';

$user = checkUserFromSession();
$user = (array) $user;

if(!isset($_POST['submit'])){
      redirect('http://localhost/project/study/app1/edit.php','Not Allowed');
}

// convert those key into variable and assign values to it, also check null values
foreach($_POST as $key => $value){
      $value = trim($value);
      if($value === ''){
            redirect(
                  'http://localhost/project/study/app1/edit.php',
                  "Please enter some value for ${key}"
            );
      }
      $$key = $value;
}

// check username present or not
$condition = " WHERE username = '$username'";
$response = runSelectQuery($condition);

if($response && $response[0]['id'] !== $user['id']){
      redirect('http://localhost/project/study/app1/edit.php','Username Already Present');
}

// check email present or not
$condition = " WHERE email = '$email'";
$response = runSelectQuery($condition);

if($response && $response[0]['id'] !== $user['id']){
      redirect('http://localhost/project/study/app1/edit.php','Email Already Present');
}


$file = $_FILES['image'];

if($file['error'] === 0){
      $image_res = imageUpload($file);

      if($image_res['status'] === 0){
            redirect('http://localhost/project/study/app1/edit.php',$image_res['message']);
      }

      $image = $image_res['name'];
}else{
      $image = $user['image'];
}
$user_id = $user['id'];

$updateQuery = "UPDATE `users` SET
`name` = '$name',
`username` = '$username',
`email` = '$email',
`password` = '$password',
`phonenumber` = '$phonenumber',
`address` = '$address',
`gender` = '$gender',
`image` = '$image',
`updated_at` = now()
WHERE `id` = '$user_id';";

$result = runInsertQuery($updateQuery);

if($result){
      redirect('http://localhost/project/study/app1/home.php',"Successfully Updated");
}else{
      redirect('http://localhost/project/study/app1/edit.php',"Something Went Wrong...");
}



