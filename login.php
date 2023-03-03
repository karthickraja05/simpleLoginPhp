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
                  'http://localhost/project/study/app1/',
                  "Please enter some value for ${key}"
            );
      }
      $$key = $value;
}

// check username present or not
$condition = " WHERE username = '$username' AND password = '$password'";
$response = runSelectQuery($condition);

if(gettype($response) !== 'array'){
      redirect('http://localhost/project/study/app1/','Invalid Credentials.');
}

$_SESSION['user'] = json_encode($response[0]);

redirect('http://localhost/project/study/app1/home.php','Successfully Login');

?>