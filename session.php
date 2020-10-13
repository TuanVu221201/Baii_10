<?php
    session_start();
    if(!isset($_SESSION['name'])){
        $_SESSION['name'] = "Tuan_Vu";
        $_SESSION['age']=19;
    }
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Session</title>
    </head>
    <body>
        <?php
            echo "Tên bạn là: ".$_SESSION['name']."<br/>";
            echo "Tuổi bạn là: ".$_SESSION['age']."<br/>";
            
        ?>
        <br>
        <a href="./index.php"><button>Trang chủ</button></a>
    </body>
</html>
