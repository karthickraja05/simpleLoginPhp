<?php
require_once 'session_msg.php';
require_once 'db.php';
require_once 'function.php';

redirectFromGuest();

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Register - App</title>
</head>
<body>
      <div>
            <h1>Register to App</h1>
            <form action="add.php" method="post" enctype="multipart/form-data">
                  <b>Name: </b><input type="text" name="name" autocomplete="off"/><br/><br/>
                  <b>UserName: </b><input type="text" name="username" autocomplete="off" value=""/><br/><br/>
                  <b>Email: </b><input type="text" name="email" autocomplete="off"/><br/><br/>
                  <b>Password: </b><input type="password" name="password" autocomplete="off"/><br/><br/>
                  <b>PhoneNumber: </b><input type="text" name="phonenumber" autocomplete="off"/><br/><br/>
                  <b>Address: </b><input type="text" name="address" autocomplete="off"/><br/><br/>
                  <b>Gender: </b>
                  Male -> <input type="radio" name="gender" value="male"/> &nbsp;
                  Female -> <input type="radio" name="gender" value="female"/> &nbsp;
                  Others -> <input type="radio" name="gender" value="others"/><br/><br/>
                  <b>Image File: </b> <input type="file" name="image"/><br/><br/>
                  <input type="submit" name="submit" value="Register">
            </form><br/><br/>
            Already have an Account: <a href="http://localhost/project/study/app1/">Click Here</a>
      </div>
</body>
</html>