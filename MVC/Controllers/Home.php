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
    );  // Hiển thị view Login.php từ thư mục Views
    }

    // Hàm xử lý đăng nhập
     function handleLogin() {
        if (isset($_POST['txtLogin'])) {
            $username = $_POST['txtName'];
            $password = $_POST['txtPasswd'];

            if ($username == "" || $password == "") {
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin');</script>";
                return;
            }

            $result = $this->userModel->checkUser($username, $password);

            if ($result->num_rows > 0) {
                session_start();
                $user = $result->fetch_assoc();
                $_SESSION['Tentaikhoan'] = $user['Tentaikhoan'];

                $loaiTaiKhoan = $user['Loaitaikhoan'];

                // Điều hướng theo loại tài khoản
                if ($loaiTaiKhoan == "Phongban") {
                    header('Location: http://localhost/quanlysieuthi/Danhsachsp/hienthi');
                    exit;
                } elseif ($loaiTaiKhoan == "User") {
                    header('Location: http://localhost/quanlysieuthi/Thongke');
                    exit;
                } else {
                    header('Location: http://localhost/quanlysieuthi/Danhsachsp');
                    exit;
                }
            } else {
                echo "<script>alert('Tên tài khoản hoặc mật khẩu không đúng');</script>";
            }
        }
    }
}
?>
