<?php

class Home extends controller {
    private $userModel;

    // Hàm khởi tạo để sử dụng model
    public function __construct() {
        $this->userModel=$this->model('UserModel');
    }

    // Hàm hiển thị trang login
    public function Get_data() {
        $this->view('mm',[
            'page'=>'Login'
        ]
    ); 
    }

    // Hàm xử lý đăng nhập
    public function handleLogin() {
        echo "Hàm handleLogin được gọi!<br>";
        var_dump($_POST); // Xem dữ liệu gửi lên
        if (isset($_POST['txtLogin'])) {
            $username = $_POST['txtName'];
            $password = $_POST['txtPasswd'];
    
            if ($username == "" || $password == "") {
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin');</script>";
                return;
            }
    
            // Kiểm tra người dùng
            $result = $this->userModel->checkUser($username, $password);
            if ($result && $result->num_rows > 0) {
                session_start();
                $user = $result->fetch_assoc();
                $_SESSION['Tentaikhoan'] = $user['Tentaikhoan'];
                $_SESSION['Loaitaikhoan'] = $user['Loaitaikhoan'];
                $loaiTaiKhoan = $user['Loaitaikhoan'];
    
                if ($loaiTaiKhoan == "Department") {
                    header('Location: /quanlysieuthi/Danhsachsp/hienthi');
                    exit;
                } elseif ($loaiTaiKhoan == "User") {
                    header('Location: /quanlysieuthi/Thongke');
                    exit;
                } else {
                    header('Location: /quanlysieuthi/Danhsachsp');
                    exit;
                }
            } else {
                echo "<script>alert('Tên tài khoản hoặc mật khẩu không đúng');</script>";
            }
        } else {
            echo "Dữ liệu không được gửi!";
        }
    }
    
}
?>
