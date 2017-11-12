<?php
     require  'config.php';
     $username = $_POST['username'];
     $password = $_POST['password'];
     $confirmpassword = $_POST['confirmpassword'];
     $email = $_POST['email'];

     if ($password==$confirmpassword) {
          
     

     //เข้ารหัส รหัสผ่าน

     $salt = 'plokijdfgdfgdfgdfg';
     $hash_login_password = hash_hmac('sha256', $password, $salt);

     $query = "INSERT INTO `cf_login` (`username`, `password`, `email`) VALUES ('$username', '$hash_login_password', '$email')";




     $result = mysqli_query($conn,$query);


     if ($result){
     	header("Location:  login.php");

     } else {
     	echo "เกิดข้อผิดพลาด". mysqli_error($conn);

     }
  
     } else {
           
            echo "รหัสผ่านไม่ตรงกัน";
     }
?>
