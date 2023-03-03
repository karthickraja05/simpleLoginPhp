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
      <title>Edit Profile - App</title>
</head>
<body>
      <div>
            <h1>Edit Profile</h1>
            <form action="update.php" method="post" enctype="multipart/form-data">
                  <b>Name: </b><input type="text" name="name" value="<?php echo $user['name'] ?>" autocomplete="off"/><br/><br/>
                  <b>UserName: </b><input type="text" name="username" value="<?php echo $user['username']; ?>" autocomplete="off" value=""/><br/><br/>
                  <b>Email: </b><input type="text" name="email" value="<?php echo $user['email']; ?>" autocomplete="off"/><br/><br/>
                  <b>Password: </b><input type="password" name="password" value="<?php echo $user['password']; ?>" autocomplete="off"/><br/><br/>
                  <b>PhoneNumber: </b><input type="text" name="phonenumber" value="<?php echo $user['phonenumber']; ?>" autocomplete="off"/><br/><br/>
                  <b>Address: </b><input type="text" name="address"  value="<?php echo $user['address']; ?>" autocomplete="off"/><br/><br/>
                  <b>Gender: </b>
                  Male -> <input type="radio" name="gender" <?php if ($user['gender'] == 'male') { echo "checked"; } ?> value="male"/> &nbsp;
                  Female -> <input type="radio" name="gender" <?php if ($user['gender'] == 'female') { echo "checked"; } ?>value="female"/> &nbsp;
                  Others -> <input type="radio" name="gender" <?php if ($user['gender'] == 'others') { echo "checked"; } ?> value="others"/><br/><br/>
                  <b>Image File: </b> <input type="file" name="image"/><br/><br/>
                  <?php
                  echo '<b/>Uploaded Image:</b> <br/><br/><img src="'.$base_url.$user['image'].'" width="200" height="200"/>';
                  ?>
                  <br/><br/>
                  <input type="submit" name="submit" value="Update">
            </form><br/><br/>
            
      </div>
</body>
</html>