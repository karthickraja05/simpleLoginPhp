<?php
      session_start();

      if(isset($_SESSION["message"]) && $_SESSION["message"] !== ''){
            echo "<script>alert('".$_SESSION["message"]."')</script>";
            $_SESSION["message"] = '';
      }
?>