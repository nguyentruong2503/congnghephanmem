<!DOCTYPE html>
<html>
<head>
<title>UTT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/congnghephanmem/Public/Css/bootstrap.min.css">
    <script src="http://localhost/congnghephanmem/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/congnghephanmem/Public/Js/popper.min.js"></script>
    <script src="http://localhost/congnghephanmem/Public/Js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <a href="http://localhost/congnghephanmem/Bangtotnghiep/hienthi" >
      <img src="http://localhost/congnghephanmem/Public/picture/utt.png" style="width:45%;" class="w3-round">
    </a>
    <h4><b>Quản lý</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="http://localhost/congnghephanmem/Bangtotnghiep" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>QUẢN LÝ BẰNG TỐT NGHIỆP</a> 
   
    <a href="http://localhost/congnghephanmem/Thongtin" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>QUẢN LÝ SINH VIÊN</a> 
    <a href="http://localhost/congnghephanmem/dschungchi/Get_data" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Danh sách yêu cầu</a> 
    <a href="http://localhost/congnghephanmem/dschungchidaduyet/Get_data" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Danh sách chứng chỉ đã duyệt</a> 
    <a href="http://localhost/congnghephanmem/chungchi_gvs/Get_data" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Giáo viên thêm chứng chỉ</a>   
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
  
  <div style= "height: 1200px">
               <?php 
                    include_once './MVC/Views/Pages/'.$data['page'].'.php';
               ?>
  </div>

<script>

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
