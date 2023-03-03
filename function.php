<?php

function runSelectQuery($where){

      GLOBAL $mysqli;

      $common_query = "SELECT * FROM `users`";
      
      $query = $common_query.$where;
      $result = $mysqli->query($query);
      
      if ($result->num_rows > 0) {
            // output data of each row
            $data = [];
            while($row = $result->fetch_assoc()) {
                  $data[] = $row;
            }
            return $data;
      }else{
            return 0;
      }

}

function runInsertQuery($query){
      GLOBAL $mysqli;

      $result = $mysqli->query($query);
      
      return $result;
}

function redirect($location,$message=''){
      $_SESSION["message"] = $message;
      header('Location: '.$location);
      exit;
}


function imageUpload($file,$location='images'){
      $name = $file['name'];
      $ext = end((explode(".", $name)));
      $newFileName = uniqid().".$ext";
      $target_file = $location.'/'.$newFileName;
      
      if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return [
                  'status' => 1,
                  'message' => 'Success',
                  'name' => $target_file,
            ];
      } else {
            return [
                  'status' => 0,
                  'message' => "Sorry, there was an error uploading your file.",
                  'name' => $target_file,
            ];
      }
}

function deleteAccount(){
      $user = checkUserFromSession();
      GLOBAL $mysqli;
      $query = "DELETE FROM `users` WHERE ((`id` = '$user->id'))";
      
      $result = $mysqli->query($query);
      if($result){
            redirect('http://localhost/project/study/app1/','Successfully Account Deleted');
      }else{
            redirect('http://localhost/project/study/app1/','Something went wrong for account delete');
      }
      
}

function checkUserFromSession(){
      if(isset($_SESSION['user']) && $_SESSION['user'] === ''){
            redirect('http://localhost/project/study/app1/','Please Login');
      }
      $user = json_decode($_SESSION['user']);
      if(!$user){
            redirect('http://localhost/project/study/app1/','Please Login');
      }
      
      $condition = " WHERE id = '$user->id'";
      $response = runSelectQuery($condition);
      if(!$response){
            redirect('http://localhost/project/study/app1/','Please Login');
      }
      $_SESSION['user'] = json_encode($response[0]);
      $user = json_decode($_SESSION['user']);
      return $user;
}

function redirectFromGuest(){
      if(isset($_SESSION['user']) && $_SESSION['user'] === ''){

      }else{
            redirect('http://localhost/project/study/app1/home.php','');
      }
}


?>