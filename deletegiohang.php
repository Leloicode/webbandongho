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
        $ten=$_SESSION['taikhoan1'];
        if (isset($_GET['masp'])) {
            $masp=$_GET['masp'];
            $conn1=mysqli_connect('localhost','root','','doanwebchinhthuc') or die ('Kết nối database thất bại!');
            $sql1="DELETE FROM `giohang` WHERE MASP=$masp AND TAIKHOAN='$ten'";
            $result1=mysqli_query($conn1,$sql1) or die ("Câu try vấn sai");
            header("Location: http://localhost:8080/testphp/CODE%20WEB%20%C4%90%E1%BB%92%20%C3%81N/GIOHANG.php");
       }
       if (isset($_GET['IDHD'])) {
            $IDHD=$_GET['IDHD'];
            $conn1=mysqli_connect('localhost','root','','doanwebchinhthuc') or die ('Kết nối database thất bại!');
            $sql1="DELETE FROM `chitietdonhang` WHERE IDHD='$IDHD' AND NAMEUSER='$ten'";
            $result1=mysqli_query($conn1,$sql1) or die ("Câu try vấn sai");
            header("Location: http://localhost:8080/testphp/CODE%20WEB%20%C4%90%E1%BB%92%20%C3%81N/sanphamdathang.php");
       }
       
    ?>
</body>
</html>