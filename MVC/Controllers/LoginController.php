<?php
require_once 'Models/UserModel.php';

class LoginController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function handleLogin() {
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

                // Gán giá trị cột Loaitaikhoan vào biến $loaiTaiKhoan
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
