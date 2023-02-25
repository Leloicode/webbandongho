<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['taikhoan1']) && $_SESSION['taikhoan1'] != NULL) {
            unset($_SESSION['taikhoan1']);
            header('Location:http://localhost:8080/testphp/CODE%20WEB%20%c4%90%e1%bb%92%20%c3%81N/');
        }
    ?>
</body>
</html>