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
      <title>Login to App</title>
</head>
<body>
      <div>
            <h1>Login to App</h1>
            <form action="login.php" method="post">
                  UserName: <input type="text" name="username"/><br/><br/>
                  Password: <input type="password" name="password"/><br/><br/>
                  <input type="submit" name="submit" value="Login">
            </form><br/><br/>
            Create a new Account <a href="register.php">Click Here</a>
      </div>
</body>
</html>