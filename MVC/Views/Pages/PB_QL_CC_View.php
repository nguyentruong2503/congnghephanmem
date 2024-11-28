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
    <h1><b>QUẢN LÝ SINH CHỨNG CHỈ</b></h1>
    <form action="http://localhost/congnghephanmem/PB_QL_CC/fillter/" method="post">
    <div class="w3-section w3-bottombar w3-padding-16" style="display: flex; align-items: center; gap: 10px;">
      <span class="w3-margin-right">Filter:</span> 
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
        <th>Mã Chứng Chỉ</th>
        <th>Tên Chứng Chỉ</th>
        <th>Loại Chứng Chỉ</th>
        <th>Ngày Cấp Chứng Chỉ</th>
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
        <td id="wrap"><?php echo $row['TenSinhVien'];?></td>
        <td id="wrap"><?php echo $row['MaChungChi'];?></td>
        <td id="wrap"><?php echo $row['TenChungChi'];?></td>
        <td id="wrap"><?php echo $row['LoaiChungChi'];?></td>
        <td id="wrap"><?php echo $row['NgayCapChungChi'];?></td>
       
        
      </tr>

    <?php
    }
    ?>
   

    </tbody>
  </table>
</div>
</body>
</html>