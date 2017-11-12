<?php
     require  'config.php';
     session_start();
     $role = $_POST['role'];
     $name = $_POST['name'];
     $mmr = $_POST['mmr'];
     $rank = $_POST['rank'];         


     $query = 'INSERT INTO `person` (`role`, `name`, `mmr`, `rank`, `user_id`) VALUES ("'.$role.'", "'.$name.'", "'.$mmr.'", "'.$rank.'", "'.$_SESSION['id'].'")';




     $result = mysqli_query($conn,$query);


     if ($result){
     	header("Location:  index.php");

     } else {
     	echo "เกิดข้อผิดพลาด". mysqli_error($conn);

     }

?>

