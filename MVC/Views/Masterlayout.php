<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/congnghephanmem/Public/css/phu1.css">
<link rel="stylesheet" href="http://localhost/congnghephanmem/Public/css/phu4.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>


<body class="w3-light-grey w3-content" style="max-width:100%">

<div class="admin-layout">
<div class=" w3-light-grey w3-content sidebar"  style="max-height:100%" >
<button class="toggle-btn" id="toggleSidebar">
<img src="http://localhost/congnghephanmem/Public/picture/utt.png" style="width:100%;" class="w3-round"></button>
<ul class="sidebar-menu">
                <li href="http://localhost/congnghephanmem/Danhsachtk" class="w3-bar-item w3-button w3-padding">
                    <i class="icon fa fa-user fa-fw w3-margin-right"></i>
                    <span class="menu-text">Quản Lý Tài Khoản</span>
                </li>
                <li href="http://localhost/congnghephanmem/Thongke" class="w3-bar-item w3-button w3-padding">
                    <i class="icon fa fa-th-large fa-fw w3-margin-right"></i>
                    <span class="menu-text">Thống Kê</span>
                </li>
                <li >
                    <i class="icon fa fa-th-large fa-fw w3-margin-right"></i>
                    <span class="menu-text">Settings</span>
                </li>
            </ul>
</div>
<!-- Sidebar/menu -->
<!-- <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>

  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="http://localhost/congnghephanmem/Public/picture/utt.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Quản lý</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>QUẢN LÝ BẰNG TỐT NGHIỆP</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>QUẢN LÝ CHỨNG CHỈ</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>QUẢN LÝ SINH VIÊN</a> 
  </div>
</nav> -->


<div class="main-content w3-main">
    <div style= "height: 1200px">
        <?php include_once './MVC/Views/Pages/'.$data['page'].'.php'; ?>
    </div>
</div>
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
<script src="http://localhost/congnghephanmem/Public/js/phu1.js"></script>
<script src="http://localhost/congnghephanmem/Public/js/phu4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
