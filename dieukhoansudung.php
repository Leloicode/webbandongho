<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LT DESIGN</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/csstrangchu.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/pnotify/dist/PNotifyBrightTheme.css">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/thongbao.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    </head>

    <?php if (isset($_GET['search'])) { ?>
    <script>
var loader = function() {
    setTimeout(function() {
        $('#loader').css({ 'opacity': 0, 'visibility':'hidden' });
    }, 2500);
};
$(function(){
    loader();
});
</script>
    <?php
  } else {
  ?>
<script>
var loader = function() {
    setTimeout(function() {
        $('#loader').css({ 'opacity': 0, 'visibility':'hidden' });
    }, 600);
};
$(function(){
    loader();
});
</script>
<?php }?>
  
  <style type="text/css">
        .card a img:hover{
          transform: scale(1.1);
        }
        
        .imagegioithieu{
          margin-top:20px;
        }
        .imagegioithieu img{
          margin: 2px;
          border: 1px solid ;
          
        }
        .imagegioithieu .imgphu img:hover{
          transform: scale(1.1);
          
        }
        .imagegioithieu .imgphu3 img:hover{
          transform: scale(1.1);
        }
        .imagegioithieu .imgphu2 img:hover{
          height:600px;
          transform: scale(1.1);
        }
        .imagegioithieu .imgphu  img{
        width: 551px;
        height: 250px;
        }
        .imagegioithieu .imgphu3  img{
        width: 551px;
        height: 250px;
        }
        .imagegioithieu .imgphu2  img{
        width: 99.7%;
        height: 500px;
        }
        footer{
          background-color: #DDDDDDDD;
          height: 300px;
        }
        footer .col-left{
            margin-left: 20px;
        }
        footer .col-left .icon{
          margin-left:15px;
        }
        footer .col-left svg{
          width: 50px;
          
        }
        .copyright{
          background-color:#666666;
        }
        .policy ul li{
            list-style-type: none;
        }


        .yeuthich{
          position: relative;
          height: 450px;
          
        }

        .yeuthich > ul {
  position: absolute ;
  top: 50%;
  width: 100%;
  
  height: 200px; 
  text-align: center;
  
}

.yeuthich ul > li {
  width: 23%;
  margin-left:16px;
  margin-top:15px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  list-style-type: none;
  position: absolute;
  top: 0;
  padding: 20px;
  height: 380px; 
  opacity: 0;
  padding-top: 40px;
  text-align: center;
  transition: 1s opacity; 
}

.yeuthich .active {
  opacity: 1;
}

.yeuthich p {
  font-family: sans-serif;
  font-size: 13px;
  color: #646566;
  line-height: 1.5em;
}

.yeuthich strong { 
  color: black;
  font-weight: 700;
  font-size: 60px; 
  line-height: 100px; 
}



#loader {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999;
    width: 100%;
    height: 100%;
    background-color: #fff;
    transition: all 0.8s ease-in-out;
}
.circle {
    height: 40px;
    margin: 50px auto;
    position: relative;
    text-align: center;
    width: 40px;
    -webkit-animation: circle_dot 2.0s infinite linear;
            animation: circle_dot 2.0s infinite linear;
}

.circle1, .circle2 {
    height: 60%;
    display: inline-block;
    background-color: #ef5f38;
    border-radius: 100%;
    position: absolute;
    top: 0;
    width: 60%;
    -webkit-animation: circle_bounce 2.0s infinite ease-in-out;
            animation: circle_bounce 2.0s infinite ease-in-out;
}

.circle2 {
    bottom: 0;
    top: auto;
    -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
}

@-webkit-keyframes circle_dot { 100% { -webkit-transform: rotate(360deg) }}
@keyframes circle_dot { 100% { transform: rotate(360deg); -webkit-transform: rotate(360deg) }}

@-webkit-keyframes circle_bounce {
    0%, 100% { -webkit-transform: scale(0.0) }
    50%      { -webkit-transform: scale(1.0) }
}

@keyframes circle_bounce {
    0%, 100% { 
        -webkit-transform: scale(0.0);
                transform: scale(0.0);
    } 50% { 
        -webkit-transform: scale(1.0);
                transform: scale(1.0);
    }
}

.toast-container {
  position: fixed;
  bottom: -140px;
  width: 90%;
  max-width: 720px;
  display: flex;
  align-items: center;
  background: #000;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  padding: 0 16px;
  border-radius: 24px;
  box-shadow: 0 8px 20px -4px rgba(0, 0, 0, 0.2);
  left: 50%;
  transform: translateX(-50%);
  transition: all 1s ease;
}

.toast-container.active {
  bottom: 10px;
}

.toast-container h3 {
  font-weight: 800;
  line-height: 1.5;
  font-size: 16px;
}

.toast-container .text-content {
  padding: 0 24px;
  padding-right: 40px;
}

.toast-container p.author-name {
  color: #aaa;
  font-size: 14px;
}

.toast-container a {
  color: #5f64f3;
}
.toast-container a:hover{
    color:yellow;
}
.toast-container img{
  height:100px;
  border-radius:50%;
}
.toast-container svg{
  color: #fff;
}

.toast-container .close {
  position: absolute;
  top: 16px;
  right: 16px;
  cursor: pointer;
}

        
        
        
        
    </style>
<body >
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
<?php if (isset($_SESSION['taikhoan1'])) {
   $ten=$_SESSION['taikhoan1']; 
   
   
?>




    <header>
    <?php $ten=$_SESSION['taikhoan1'];?>
        <nav class="navbar navbar-light bg-light" id="logo">
            <a class="navbar-brand" href="TRANGCHU.php">
              <img src="images/logoDOAN1.png" width="30" height="30" alt="" title="LT DESIGN">
            </a>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="TRANGCHU.php">Trang chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="CUAHANG.php">Cửa Hàng</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sửa Chữa
                  </a>
                  <div class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="thaypin.php">Thay pin</a>
                    <a class="dropdown-item" href="thaykieng.php">Thay Kiếng</a>
                    <a class="dropdown-item" href="vesinhdongho.php">Vệ sinh đồng hồ</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vechungtoi.php">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lienhe.php">Liên hệ</a>
                </li>
              </ul>
            </div>
        </nav>
        <nav class="navbar navbar-light bg-light" id="search">
            <form class="form-inline">
              <input style="width:350px;" class="form-control mr-sm-2" type="search" placeholder="Bạn muốn tìm gì?" name="search" aria-label="Search"  required>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <nav class="navbar navbar-light bg-light" id="suly" style=" width:170px;  ">
                    <a href="GIOHANG.PHP" style="border: 0.1px solid; border-radius:5px; float:left; margin-bottom:-5px;" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <b> 
            <?php 
              $conn1=mysqli_connect('localhost','root','','doanwebchinhthuc') or die ('Kết nối database thất bại!');
              $sql1="SELECT * FROM `giohang` WHERE TAIKHOAN='$ten'";
              $result1=mysqli_query($conn1,$sql1) or die ("Câu try vấn sai");
              $dem=mysqli_num_rows($result1);
              echo "$dem";
              
            ?>
            </b>
            </a>
         
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu" style="height:20px;">
            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
              <ul class="navbar-nav">
                <li class="nav-item dropdown" style="margin-bottom:5px; ">
                  <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="<?php 
                $sql2="SELECT * FROM `user` WHERE TAIKHOAN='$ten'";
                $result2=mysqli_query($conn1,$sql2) or die ("Câu try vấn sai");
                $row1=mysqli_fetch_assoc($result2);
                if (!$row1['AVATAR'] ) {
                     echo "imgavatar/avtarchung.jpg";
                }
                else {
                    echo"imgavatar/".$row1['AVATAR'];
                }
                
            ?>" alt="" style="float:right; border-radius:10px;" width="40px" height="40px">
                  </a>
                  <form action="" method="post"></form>
                  <div class="dropdown-menu  dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="thongtincanhan.php">Thông tin cá nhân</a>
                    <a class="dropdown-item" href="sanphamdathang.php">Sản phẩm đặt hàng</a>
                    <a class="dropdown-item" method="post" href="logout.php" name="dangxuat"  >Đăng xuất</a>
                  </div>
                  </form>
              </ul>
            </div>
        </nav>  

        </nav>
        
    </header>

    <?php if (!isset($_GET['search']) || $_GET['search']=="") {
   ?>

    <p style="background-color:	#EEE0E5;">🚴Trang chủ  » điều khoản sử dụng</p>
    <p style="text-align:center; background-color:#BBBBBB; margin-top:-20px; font-size:40px; font-family:'Comic Sans MS';">ĐIỀU KHOẢN SỬ DỤNG</p>
    <div class="container">
    
    <h5 style="border-left:5px solid;">&nbsp;CHÍNH SÁCH BẢO MẬT</h5>
    <p>
    Chính sách bảo mật cho bạn biết chúng tôi sử dụng thông tin cá nhân của bạn thu thập được tại trang web này như thế nào. Xin vui lòng đọc chính sách bảo mật trước khi sử dụng trang web hoặc gửi bất kỳ thông tin cá nhân nào.
    </p>
    <p>Khi sử dụng trang web, bạn đang chấp nhận những điều được mô tả trong chính sách bảo mật. Những điều này có thể thay đổi, nhưng bất kỳ thay đổi nào cũng đều sẽ được đăng lên và thay đổi sẽ chỉ áp dụng cho các hoạt động và thông tin trên cơ sở tịnh tiến, chứ không phải hồi tố. Bạn nên xem lại chính sách bảo mật bất cứ khi nào bạn truy cập trang web để đảm bảo rằng mình hiểu các thông tin cá nhân mà bạn cung cấp sẽ được sử dụng như thế nào. Chính sách của chúng tôi là giữ kín thông tin cá nhân nhận được từ trang web hoàn toàn bí mật và chỉ dùng cho mục đích nội bộ. Chúng tôi sẽ không chia sẻ thông tin cá nhân của bạn với bất kỳ bên nào khác. Hãy yên tâm rằng chúng tôi tôn trọng sự riêng tư của bạn và xử lý dữ liệu cá nhân của bạn với sự cẩn trọng tối đa.</p>
    <h5 style="border-left:5px solid;">&nbsp;THU THẬP THÔNG TIN CÁ NHÂN CỦA BẠN</h5>
    <p>Chúng tôi thu thập các thông tin định danh cá nhân như tên, địa chỉ bưu điện, địa chỉ email, số điện thoại, v.v… khi khách truy cập tự nguyện gửi cho chúng tôi. Thông tin này chỉ được sử dụng để đáp ứng yêu cầu cụ thể của bạn, trừ khi bạn cho phép sử dụng nó theo cách khác, ví dụ thêm bạn vào danh sách gửi email của chúng tôi. Thông tin chúng tôi thu thập có thể bao gồm tên, chức danh, tên công ty hay tổ chức, e-mail, điện thoại và ngày sinh nhật của bạn. Chúng tôi có thể thu thập một số thông tin nhất định về chuyến thăm của bạn, chẳng hạn như loại trình duyệt bạn sử dụng; ngày và thời gian bạn truy cập vào trang web; các trang bạn truy cập khi mở trang web và địa chỉ trang web mà từ đó bạn kết nối trực tiếp đến trang web của chúng tôi. Thông tin này được sử dụng để giúp cải thiện và quản lý trang web.</p>
    <h5 style="border-left:5px solid;">&nbsp;COOKIE / CÔNG NGHỆ THEO DÕI</h5>  
    <p>Trang web có thể sử dụng cookie và công nghệ theo dõi tùy thuộc vào các tính năng được cung cấp. Cookie và công nghệ theo dõi rất hữu ích cho việc thu thập thông tin như loại trình duyệt và hệ điều hành, theo dõi số lượng khách truy cập vào trang web, và hiểu biết khách truy cập sử dụng trang web như thế nào. Cookie cũng có thể giúp tùy chỉnh trang web cho khách. Không thể thu thập được thông tin cá nhân thông qua cookie và công nghệ theo dõi khác, tuy nhiên, nếu trước đó bạn đã cung cấp thông tin cá nhân định danh, cookie có thể gắn với các thông tin đó. Cookie và thông tin theo dõi thu thập được có thể được chia sẻ với bên thứ ba. Chúng tôi cũng sử dụng mã tái tiếp thị đăng nhập khi khách truy cập xem các trang cụ thể, cho phép chúng tôi đưa ra các quảng cáo mục tiêu trong tương lai.</p>         
    <h5 style="border-left:5px solid;">&nbsp;PHÂN PHỐI THÔNG TIN</h5>  
    <p>Chúng tôi xử lý tất cả dữ liệu khách hàng phù hợp với Pháp lệnh dữ liệu cá nhân (Riêng tư) ở Việt Nam. Chúng tôi sẽ không bao giờ bán, chia sẻ hoặc sử dụng bất kỳ thông tin cá nhân nào bạn cung cấp cho chúng tôi vì bất kỳ mục đích nào khác hơn là trao đổi với bạn về các sản phẩm, việc đặt chỗ hoặc thư mời đến các sự kiện của chúng tôi. Chúng tôi có thể chia sẻ thông tin với các cơ quan chính phủ hoặc các công ty khác hỗ trợ chúng tôi trong việc phòng chống gian lận hoặc điều tra.<br><br>

Chúng tôi có thể làm như vậy khi: (1) được pháp luật cho phép hoặc theo yêu cầu của pháp luật; (2) cố gắng để bảo vệ hoặc ngăn chặn gian lận thực tế hoặc tiềm năng hoặc giao dịch trái phép; (3) điều tra gian lận đó đã xảy ra. Các thông tin không được cung cấp cho các công ty này vì mục đích tiếp thị.<br><br>

Thông tin cá nhân của bạn được lưu giữ an toàn. Chỉ các nhân viên, các đại lý và nhà thầu được ủy quyền (người đã đồng ý giữ thông tin an toàn và bảo mật) có quyền tiếp cận các thông tin này. Tất cả email và bản tin từ trang web này cho phép bạn chọn không tiếp tục nhận thư.</p>    
<h5 style="border-left:5px solid;">&nbsp;CÂU HỎI</h5>   
<p>Nếu bạn có bất kỳ câu hỏi, mối quan tâm, hoặc ý kiến gì về chính sách bảo mật của chúng tôi, xin vui lòng liên hệ với chúng tôi qua form Liên hệ với chúng tôi.<br><br>

Chúng tôi giữ quyền thực hiện các thay đổi trong chính sách này. Tất cả thay đổi sẽ được phản ánh trên trang web này.</p>  
<h5 style="border-left:5px solid;">&nbsp;THỜI GIAN ÁP DỤNG</h5>
<p>Chính sách này được áp dụng xuyên suốt thời gian trang web này hoạt động.</p>
<hr>
    </div>
    
    <?php }?>


    <br>
<?php 
if (isset($_GET['search']) && $_GET['search']!="") {
  ?>

  

  <p style="text-align:center; background-color:#BBBBBB; margin-top:-20px; font-size:40px; font-family:'Comic Sans MS';">Kết quả tìm kiếm: <?php echo $_GET['search'] ?></p>
  <?php 
  $search=$_GET['search'];
   $sql5="SELECT * FROM `sanpham` WHERE TENSP LIKE '%$search%'";
   $sql6="SELECT * FROM `sanpham`";
   $result5=mysqli_query($conn1,$sql5) or die ("Câu try vấn sai");
   $result6=mysqli_query($conn1,$sql6) or die ("Câu try vấn sai");
   $dem1=mysqli_num_rows($result5);
   $dem2=mysqli_num_rows($result6);
  ?>
  <div class="container" style="height:auto;" >
        <div class="tieudesearch" style="height: auto;">
                  <p style="float:left;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
              </svg> LL DESIGN.COM » <i style="color:#A3B5B4;">Bạn đã tìm <?php echo $search?>.</i> </p>
                
                  <p style="color:#E0485C; float:right;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg> Hiển thị <?php if ($dem1 == 0) {
                    
                  }else {
                    echo "1 - ";
                  }?>  <?php echo $dem1?> của <?php echo $dem2?> kết quả</p>
        </div>
    </div>
        <div class="container" style="height:auto;">
    <?php
    if ($dem1 == 0 ) {
      ?>
      <div class="search_not" style="height:400px;">
          <h3><br><br><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:500px;" width="86" height="86" fill="currentColor" class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
</svg><br>KHÔNG TÌM THẤY SẢN PHẨM NÀO KHỚP VỚI LỰA CHỌN CỦA BẠN.</h3>

      </div>
      <?php
    } 

    //tìm thấy sản phẩm...
    else {
      ?>
     
      <div class="search" style="width:100%; margin-top:50px; height:<?php switch ($dem1) {
        case '1':
          case '2':
            case '3':
          echo"600px";
          break;

          case '4':
            case '5':
              case '6':
            echo"1200px";
            break;
            case '7':
              case '8':
                case '9':
              echo"1750px";
              break;
          case '10':
            case '11':
              case '12':
            echo"2300px";
            break;
            case '13':
              case '14':
                case '15':
              echo"2950px";
              break;
           
        default:
          # code...
          break;
      }?>;  ">
        <br>
        <?php 
         while ($row=mysqli_fetch_assoc($result5)) {
          ?>
            <div class="card" style="width: 18rem;  float:left; padding:5px; margin:5px; background-color:#D; -moz-box-shadow: inset 0 0 7px #000000;
  -webkit-box-shadow: inset 0 0 7px #000000;
  box-shadow:  0 0 7px #000000; ">
        <a href="CHITIETSANPHAM.php?masp=<?php echo $row['MASP']; ?>"><img class="card-img-top" style="height:300px; width: 300px; margin-top:10px; margin-left:30px;" id="avatar" src="imagesanpham/<?php echo $row['AVATARCHINH'];?>" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title" id="ten"><?php echo $row['TENSP']?></h5>
          <p class="card-text" id="gia" style="color:red;"><?php echo $row['GIA'].".000"." VNĐ"; ?></p>
          <a href="updategiohang.php?masptrangchu=<?php echo $row['MASP']; ?>" class="btn btn-info btn-lg" id="giohang"  style="width:145px; height:45px; font-size:15px;">
          <svg id="icongiohang" xmlns="http://www.w3.org/2000/svg" style="width:15px; height:21px;  margin-right:3px;  margin-left:-5px; float:left;"   fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        <span class="glyphicon glyphicon-shopping-cart"  style="margin-right:7px;">Shopping Cart</span>
          </a>
          <a  class="btn btn-warning"  id="muangay" href="MUANGAY.php?masp=<?php echo $row['MASP'];?>" style="margin-left:15px; ">MUA NGAY</a>
        </div>
      </div>



        <?php
         }
        ?>
      </div>
    <?php
    }
    ?>

     







     
  </div>
  
  </div>


  

  
  
  
<?php

}

?>


         

          
    

<footer>
        
      <div class="col-left" style="width:500px; height:100%; float:left; ">
        
        <div class="congty" style="margin-top:20px;">
                  <h5 style="font-family: 'Oswald';">SHOP ĐỒNG HỒ THỜI TRANG CHÍNH HÃNG</h5>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="float:left;" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <p>Tòa nhà 29/3 Hồ Xuân Hương,TP Đà Nẵng.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="float:left; fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                </svg> 
                <p>Số điện thoại: <a href="tel:0357805837">0357805837</a></p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="float:left; fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
          </svg>
          <p>Gmail:leloi2002nvt@gmail.com.</p>

        </div> 
        <img src="images/logoDOAN1.png "style=" width:250px; margin-top:20px;  border-bottom:1px solid;" alt="">
        <div class="icon">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg></a>
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
              </svg></a>
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
              </svg></a>
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg></a>
        </div>      
        </div>
      </div>
      <div class="col-center" style="float:left; width:400px; height:60%; margin-top: 18px; margin-left:20px;">
        <h5 style="font-family: 'Oswald'; text-align:center;">CHI NHÁNH ĐÀ NẴNG</h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" style="float:left;" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg>
        <p>Địa chỉ: 99 Tô Hiến Thành ,TP Đà Nẵng.</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" style="float:left; fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                </svg> 
                <p>Số điện thoại: <a href="tel:0325416842">0325416842</a> </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" style="float:left; fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
  <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
</svg>
<p>Giờ làm việc:8h-19h</p>

        </div>
        <div class="col-center" style="float:left; width:550px; height:60%; margin-top: 18px; margin-left:20px;">
        <h5 style="font-family: 'Oswald'; text-align:center;">CHI NHÁNH HCM</h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" style="float:left;" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg>
        <p>Địa chỉ: Số 351,đường Hoàng Hoa Thám,TP HCM.</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" style="float:left; fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                </svg> 
                <p>Số điện thoại: <a href="tel:0324562359">0324562359</a> </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" style="float:left; fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
  <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
</svg>
<p>Giờ làm việc:8h-19h</p>

        
        
      


</footer>
<div class="copyright">
<i style="color:#999999; margin-left:600px;"> © 2022 Bản quyền thuộc LT DESIGN</i>
</div>

<?php 
    
}
else {
  echo "Bạn chưa đăng nhập.Vui lòng đăng nhập.";
} ?>


  

<script>const toastContainer = document.querySelector(".toast-container");
const closeBtn = document.querySelector(".toast-container .close");
const toastLink = document.querySelector(".toast-container a");

if (localStorage.getItem("displayToast")) {
  setTimeout(() => {
    toastContainer.classList.add("active");
  }, 1000);
}

const stopDisplayingToast = () => {
  localStorage.setItem("displayToast", false);
  toastContainer.classList.remove("active");
};

closeBtn.addEventListener("click", stopDisplayingToast);
toastLink.addEventListener("click", stopDisplayingToast);

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>






</body>

</html>