<?php
  session_start();
  include_once("config.php");

  if(isset($_POST['submit'])){
    if(isset($_POST['email']) && isset($_POST['password'])){

      $password=$_POST['password'];
      $sql=$dbh->prepare("SELECT COUNT(*) FROM `users` WHERE `email`=?");
      $sql->execute(array($_POST['email']));

      if($sql->fetchColumn()!=0){
       die("User Exists");
      }
      else
      {
        function rand_string($length) {
          $str="";
          $chars = "subinsblogabcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          $size = strlen($chars);
          for($i = 0;$i < $length;$i++) {
            $str .= $chars[rand(0,$size-1)];
          }
          return $str;
        }

        $p_salt = rand_string(20);
        $site_salt="subinsblogsalt"; /*Common Salt used for password storing on site.*/
        $salted_hash = hash('sha256', $password.$site_salt.$p_salt);

        $sql=$dbh->prepare("INSERT INTO `users` (`ID`, `email`, `password`, `psalt`) VALUES (NULL, ?, ?, ?);");
        $sql->execute(array($_POST['email'], $salted_hash, $p_salt));
        echo "Successfully Registered.";
      }
    }
  }
?>
