<?php
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>
    <body>
        <?php
            echo "Chao ban ".$_SESSION['name']." co tuoi la: ".$_SESSION['age'];
        ?>
        <br>
        <a href="./index.php"><button>Trang chủ</button></a>
    </body>
</html>


