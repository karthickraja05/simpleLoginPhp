<?php

require_once 'session_msg.php';
require_once 'db.php';
require_once 'function.php';

// For Check User logged in
checkUserFromSession();

$_SESSION["user"] = '';

redirect('http://localhost/project/study/app1/','Please Login');

?>