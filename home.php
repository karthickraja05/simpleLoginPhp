<?php
require_once 'session_msg.php';
require_once 'db.php';
require_once 'function.php';

// For Check User logged in
$user = checkUserFromSession();
$user = (array) $user;

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home Page</title>
</head>
<body>
      <div>
            Please Click Here For <a href="logout.php"><button>Logout</button></a><br/><br/>
            Please Click Here For <a href="delete_ac.php"><button>Delete Account</button></a> <b>But Think it Before. Won't able to recover your account</b><br/><br/>
            For <a href="edit.php"><button>Edit Profile</button></a><br/><br/>
      </div>
      <div>
            <?php 
            $html = '';
            $html .= "<p><b>ID:</b> ".$user['id'] ."</p>";
            $html .= "<p><b>Name:</b> ".$user['name'] ."</p>";
            $html .= "<p><b>UserName:</b> ".$user['username'] ."</p>";
            $html .= "<p><b>Email:</b> ".$user['email'] ."</p>";
            $html .= "<p><b>Gender:</b> ".$user['gender'] ."</p>";
            $html .= "<p><b>PhoneNumber:</b> ".$user['phonenumber'] ."</p>";
            $html .= "<p><b>Address:</b> ".$user['address'] ."</p>";
            echo $html;
            $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $base_url = str_replace('home.php','',$url);

            echo '<b/>Uploaded Image:</b> <br/><br/><img src="'.$base_url.$user['image'].'" width="200" height="200"/>';
            ?>
      </div>
</body>
</html>