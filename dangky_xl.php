<?php
    include_once './connect.php';
    
    session_start();
    if (!isset($_SESSION['count'])){
        $_SESSION['count']=1;
    }
    else {
        $_SESSION['count'] ++;
    }

    $id = $_SESSION['count'];
    $hoten = $_POST['HoTen'];
    $username = $_POST['Username'];
    $pass = $_POST['Password'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    
    $xl = "insert into user (idUS, HoTen, Username,Password, email, Phone) Value('$id','$hoten','$username','$pass','$email','$phone')";
    
    if(mysqli_query($connect,$xl)){
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='dangnhap.php';</script>";
	}
    else{
	echo 'Lỗi: ', mysqli_error($connect);
        echo "<script language='javascript'>alert('Lỗi');";
    }
?>