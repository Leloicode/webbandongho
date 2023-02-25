<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÍ</title>
    <link rel="stylesheet" href="css/styledangki.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/pnotify/dist/PNotifyBrightTheme.css">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  </head>
  <script>
$(document).ready(function() {

$('input[type=number][max]:not([max=""])').on('input', function(ev) {
  var $this = $(this);
  var maxlength = $this.attr('max').length;
  var value = $this.val();
  if (value && value.length >= maxlength) {
    $this.val(value.substr(0, maxlength));
  }
});

});

</script>
<body>
    <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="username" class="form-control" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" placeholder="Username" required autofocus >
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="number" max="9999999999" id="inputEmail" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'] ?>" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Phone</label>
              </div>
             
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control"  name="password1" value="<?php if(isset($_POST['password1'])) echo $_POST['password1'] ?>" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" name="password2" value="<?php if(isset($_POST['password2'])) echo $_POST['password2'] ?>" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="click">Register</button>
              <a class="d-block text-center mt-2 small" href="DANGNHAPDOAN.php">Sign In</a>
              <hr class="my-4">
              
            </form>
            <?php
            if (isset($_POST['click'])) {
                $username=$_POST['username'];
                $phone=$_POST['phone'];
                $pass1=$_POST['password1'];
                $pass2=$_POST['password2'];
                if (strlen($phone) < 10 || $phone[0] != 0 ) {
                    echo"Số điện thoại không đúng định dạng.";
                    return;
                }
                if ($pass1 != $pass2) {
                    echo"Mật khẩu không trùng nhau.";
                    return;
                }
                $conn=mysqli_connect('localhost','root','','doanwebchinhthuc') or die ('Kết nối với database thất bại');
				$sql="SELECT TAIKHOAN FROM `user` WHERE TAIKHOAN='$username'";
				$result=mysqli_query($conn,$sql) or die ('Câu try vấn sai!');
				$dem=mysqli_num_rows($result); 
                if ($dem > 0) {
                    echo"Tài khoản đã tồn tại";
                }
                else {
                    $sql1="INSERT INTO `user`(`TAIKHOAN`, `PASSWORD`, `SDT`) VALUES ('$username','$pass1','$phone')";
                    $result1=mysqli_query($conn,$sql1);
					if ($result1) {
						echo"Đăng kí thành công.<a href='DANGNHAPDOAN.php'> Sign in</a>";
					}
					else {
						echo"Đăng kí thất bại!";
					}
                }
                
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>



  

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>