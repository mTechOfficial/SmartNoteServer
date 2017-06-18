<?php
  session_start();
  include_once("config.php");

  $email=$_POST['email'];
  $password=$_POST['password'];

  if(isset($_POST) && $email!='' && $password!=''){
    $sql=$dbh->prepare("SELECT * FROM users WHERE email=?");
    $sql->execute(array($email));

    while($r=$sql->fetch()){
      $id=$r['ID'];
      $email=$r['email'];
      $p=$r['password'];
      $p_salt=$r['psalt'];
    }

    $site_salt="subinsblogsalt";/*Common Salt used for password storing on site. You can't change it. If you want to change it, change it when you register a user.*/
    $salted_hash = hash('sha256',$password.$site_salt.$p_salt);
    if($p==$salted_hash){
      $response["error"] = 0;
      $response["success"] = 1;
      $response["email"] = $email;
      $response["message"] = "You Logged In Successfully";

    }else{
      $response["error"] = 1;
      $response["success"] = 0;
      $response["email"] = $email;
      $response["message"] = "Error logging in";
    }

    echo json_encode($response);
  }
?>
