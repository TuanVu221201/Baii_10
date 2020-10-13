<?php
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng Ký</title>
    </head>
    <body>
        <form action="dangky_xl.php" method="post" enctype="multipart/form-data" name="form1">
            <table align="center" style="background-color: antiquewhite;">
                <tr>
                    <td colspan="2">
                        <p align="center">Đăng Ký</p>
                    </td>
                </tr>
                <tr>
                    <td>Họ và tên: </td>
                    <td><input type="text" name="HoTen" value="" /></td>
                </tr>
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td><input type="text" name="Username" value="" /></td>
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td><input type="password" name="Password" value="" /></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" value="" /></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><input type="text" name="Phone" value="" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="dangky" value="Đăng Ký" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
