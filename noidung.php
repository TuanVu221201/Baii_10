<?php
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        Trang Quan Tri
        <?php 
            if (isset($_SESSION['username']) && isset($_SESSION['password']))
                echo $_SESSION['username'];
            else{
                echo "<script language='javascript'>alert('Ban chua dang nhap - Vui long dang nhap lai');";
                echo "location.href='dangnhap.php';</script>";
            }
        ?>
        <a href="logout.php" >Thoat ra </a>
        <br>
        <a href="./index.php"><button>Trang chủ</button></a>
    </body>
</html>
<?php 
    if (isset($_SESSION['username']) && isset($_SESSION['password']))
            echo $_SESSION['username'];
    else{
            echo "<script language='javascript'>alert('Ban chua dang nhap - Vui long dang nhap lai');";
            echo "location.href='dangnhap.php';</script>";
    }
?>

