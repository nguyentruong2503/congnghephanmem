<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="http://localhost/congnghephanmem/Public/picture/utt.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Quản lý</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="http://localhost/congnghephanmem/PB_QL_Bang" 
       onclick="setActiveLink(this)" 
       class="w3-bar-item w3-button w3-padding">
        <i class="fa fa-th-large fa-fw w3-margin-right"></i>QUẢN LÝ BẰNG TỐT NGHIỆP
    </a> 
    <a href="http://localhost/congnghephanmem/PB_QL_CC" 
       onclick="setActiveLink(this)" 
       class="w3-bar-item w3-button w3-padding">
        <i class="fa fa-envelope fa-fw w3-margin-right"></i>QUẢN LÝ CHỨNG CHỈ
    </a>
    <a href="http://localhost/congnghephanmem/PB" 
       onclick="setActiveLink(this)" 
       class="w3-bar-item w3-button w3-padding ">
        <i class="fa fa-user fa-fw w3-margin-right"></i>QUẢN LÝ PHÒNG BAN
    </a>
</div>

<script>
    // Khi trang được tải, kiểm tra xem có liên kết nào được lưu trữ trong localStorage hay không
    document.addEventListener("DOMContentLoaded", function () {
        var activeLink = localStorage.getItem("activeLink");
        if (activeLink) {
            // Lấy liên kết lưu trữ và thêm class 'w3-text-teal'
            var link = document.querySelector(`.w3-bar-block a[href='${activeLink}']`);
            if (link) {
                link.classList.add("w3-text-teal");
            }
        }
    });

    function setActiveLink(element) {
        // Lấy tất cả các liên kết trong w3-bar-block
        var links = document.querySelectorAll('.w3-bar-block .w3-bar-item');

        // Loại bỏ class 'w3-text-teal' khỏi tất cả các liên kết
        links.forEach(link => link.classList.remove('w3-text-teal'));

        // Thêm class 'w3-text-teal' cho liên kết được nhấp
        element.classList.add('w3-text-teal');

        // Lưu liên kết hiện tại vào localStorage
        localStorage.setItem("activeLink", element.getAttribute("href"));
    }
</script>
 
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">



  <div style= "height: 725px">
               <?php 
                    include_once './MVC/Views/Pages/'.$data['page'].'.php';
               ?>
        </div>
  
  
  
  
  
 
   
 

        <!-- <script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script> -->
</body>
</html>
