<?php
    
    $host = "localhost";
    $db = "team_config";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($host,$username,$password,$db);
    mysqli_set_charset($conn,"utf8");
 

    if (mysqli_connect_errno()) {
    	echo "ไม่สามมารถติดต่อฐานข้อมูล MySQL ได้". mysqli_connect_error(); 
    	exit;
    }
 ?>