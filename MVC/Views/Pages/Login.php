<!--
$connect = mysqli_connect('localhost','root','','cnpm');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
else{
    echo "ket noi that bai";
}

if(isset($_POST['txtLogin'])){
  
    $tentk = $_POST['txtName'];
    $mk = $_POST['txtPasswd'];
    
    //kiem tra thieu dl
    if($tentk == "" || $mk == "")
    {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin??')</script>";
    }
    
    else
    {
    //kiem tra ton tai
    $sql_c= "SELECT * FROM tkk WHERE Tentaikhoan ='$tentk' and Matkhau = '$mk'";
    $result = $connect->query($sql_c);
    $dl=mysqli_query($connect,$sql_c);

    if ( isset($dl)&& mysqli_num_rows($dl)>0)  {
      // Khởi tạo một mảng để lưu trữ kết quả
      $users = [];
      $kq  = 0;
      // Lặp qua từng hàng kết quả
      while ($row=mysqli_fetch_assoc($dl)) {
        $loai=$row['Loaitaikhoan'];
        session_start();
  $_SESSION['Tentaikhoan']=$row['Tentaikhoan'];
          $users[] = $row; // Lưu trữ mỗi hàng vào mảng $users
          $kq++; 
      }
  } else {
      $users = [];
      

  }
  if($kq==0){
    echo "<script>alert('Tên Tài Khoản Hoặc Mật Khẩu Không Đúng')</script>";
  }else{
//xu ly 
if($loai == "Admin")
{
  header('location: http://localhost/quanlysieuthi/MVC/BHWEB_Trung123/Trungcontroller/index.php');
}
else if($loai == "Phongban"){
    header('location: http://localhost/quanlysieuthi/MVC/BHWEB_Trung123/Trungcontroller/index.php');
}
else
{
  header('location: http://localhost/quanlysieuthi/Danhsachsp/hienthi');
  
}
}
    }
}
  


?> -->

 <div>
 <form method="POST" action="http://localhost/congnghephanmem/Home/handleLogin">
  <input type="text" name="txtName" placeholder="Tên đăng nhập">
  <input type="password" name="txtPasswd" placeholder="Mật khẩu">
  <button type="submit" name="txtLogin">Đăng nhập</button>
</form>
 </div>
  



