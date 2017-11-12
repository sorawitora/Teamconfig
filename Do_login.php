<?php
      
       require 'config.php';

       $username = mysqli_real_escape_string($conn,$_POST['username']);
       $password = mysqli_real_escape_string($conn,$_POST['password']);

       $salt = 'plokijdfgdfgdfgdfg';
       $hash_login_password = hash_hmac('sha256', $password, $salt);

       $sql = "SELECT * FROM `cf_login` WHERE username=?  AND password=?"; 
       $stmt = mysqli_prepare($conn, $sql);
       mysqli_stmt_bind_param($stmt,"ss",$username,$hash_login_password);
       mysqli_execute($stmt);
       $result_user = mysqli_stmt_get_result($stmt);
       
       if ($result_user->num_rows == 1) {
          session_start();
          $row_user = mysqli_fetch_array($result_user,MYSQL_ASSOC);
          $_SESSION['id'] = $row_user['id'];
          header("Location: addinfo.php");
       } else {
        echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
       }
?>