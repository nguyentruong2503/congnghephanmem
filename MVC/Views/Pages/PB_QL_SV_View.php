<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <br>
    <h1><b>QUẢN LÝ SINH VIÊN</b></h1>
    
    <form action="http://localhost/congnghephanmem/PB_QL_SV/fillter/" method="post">
    <div class="w3-section w3-bottombar w3-padding-16" style="display: flex; align-items: center; gap: 10px;">
      <span class="w3-margin-right">Lọc:</span> 
      <button class="w3-button w3-black" name="filter" value="ALL">ALL</button>
      <button class="w3-button w3-white w3-hide-small" name="filter" value="71"><i class=""></i>K71</button>
      <button class="w3-button w3-white w3-hide-small" name="filter" value="72"><i class=""></i>K72</button>
      <button class="w3-button w3-white w3-hide-small" name="filter" value="73"><i class=""></i>K73</button>
      <button class="w3-button w3-white w3-hide-small" name="filter" value="74"><i class=""></i>K74</button>
      <button class="w3-button w3-white w3-hide-small" name="filter" value="75"><i class=""></i>K75</button>
      <input type="text" class="form-control w3-input" 
       style="width: 170px; height: 40px; border-radius: 0; border: none; padding: 5px;" 
       placeholder="Tên sinh viên" 
       name="ten_tk" 
       value="<?php if(isset($data['ten_tk'])) echo $data['ten_tk'] ?>">    

       
       <button  type="button" class="w3-button w3-red" data-bs-toggle="modal" data-bs-target="#myModal">Thêm sinh viên</button>
       
       
      
    </div>
    </form>
    
    </div>
    
</head>

<body>

<div class="container mt-3">
        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Lớp</th>
        <th>Email</th>
        
      </tr>
    </thead>
    <tbody>

    <?php 
      if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0)
      while($row = mysqli_fetch_assoc($data['dulieu']))
      {
    ?>
        <tr>
        <td id="wrap"><?php echo $row['MaSinhVien'];?></td>
        <td id="wrap"><?php echo $row['HoTen'];?></td>
        <td id="wrap"><?php echo $row['NgaySinh'];?></td>
        <td id="wrap"><?php echo $row['Lop'];?></td>
        <td id="wrap"><?php echo $row['Email'];?></td>
        
      </tr>

    <?php
    }
    ?>
   

    </tbody>
  </table>
</div>







  <!-- The Modal -->
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <label><h3 class="modal-title">Sinh Viên Mới</h3></label>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container">
        <h1><h1>
        <form action="http://localhost/congnghephanmem/PB_QL_SV/add/" method="POST">
        
        <div class="form-group">
            <label><h4>Mã sinh viên</h4></label>
            <input type="text"  class="form-control" name="masv">
        </div>
        <div class="form-group">
            <label><h4>Họ tên</h4></label>
            <input type="text"  class="form-control" name="tensv">
        </div>

        <div class="form-group">
            <label><h4>Ngày sinh</h4></label>
            <input type="date" class="form-control" name="ngaysinh">
        </div>
        <div class="form-group">
            <label><h4>Lớp</h4></label>
            <input type="text"  class="form-control" name="lop">
        </div>

        <div class="form-group">
            <label><h4>Email</h4></label>
            <input type="text"class="form-control"  name="email">
        </div>

       
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button  type="submit" class="w3-button w3-green" data-dismiss="modal" id="btnSave" name="btnSave">Lưu</button>
      <button type="button" class="w3-button w3-red" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>