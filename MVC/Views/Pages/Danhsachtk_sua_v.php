<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form Example</title>
    <!-- Liên kết tới Bootstrap CSS nếu bạn sử dụng các lớp của Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS để căn giữa form */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Chiều cao của viewport để căn giữa theo chiều dọc */
        }
        .form-group {
            width: 100%;
            max-width: 800px; /* Đặt chiều rộng tối đa cho form */
            padding: 40px; /* Thêm khoảng đệm */
            border: 2px solid #ccc; /* Thêm viền nếu muốn */
            border-radius: 20px; /* Bo tròn các góc */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Thêm đổ bóng */
            background-color: #f8f9fa; /* Đặt màu nền */
        }
        .form-group label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        .dd2 {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 8px;
            box-sizing: border-box;
        }
        .btn-primary {
            width: 100%;
            max-width: 200px;
            margin-top: 20px;
            padding: 12px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="http://localhost/congnghephanmem/Danhsachtk/sua" style="background-image: url('http://localhost/congnghephanmem/Public/picture/logo.jpg'); background-size: cover; padding: 20px; border-radius: 10px; height : 1000px">
            <div class="form-group">
                <?php 
                if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0){
                    while($row = mysqli_fetch_array($data['dulieu'])){
                ?>
                <label>Tên Tài Khoản</label>
                <input type="text" class="form-control dd2" name="txtTentk" value="<?php echo $row['Tentaikhoan'] ?>">
                <label>Mật Khẩu</label>
                <input type="text" class="form-control dd2" name="txtMk" value="<?php echo $row['Matkhau'] ?>">
                <label>Loại Tài Khoản</label>
                <input type="text" class="form-control dd2" name="txtLoaitk" value="<?php echo $row['Loaitaikhoan'] ?>">
                <?php        
                    }
                }
                ?>
                <br>
                <button style = "text-align: center" type="submit" class="btn btn-dark" name="btnSave">Lưu</button>
            </div>
        </form>
    </div>
    
</body>
</html>
