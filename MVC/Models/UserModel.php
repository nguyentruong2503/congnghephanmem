<?php
class UserModel extends connectDB {
    // private $connect;

    // public function __construct() {
    //     $this->connect = mysqli_connect('localhost', 'root', '', 'cnpm');
    //     if ($this->connect) {
    //         mysqli_query($this->connect, "SET NAMES 'UTF8'");
    //     } else {
    //         die("Kết nối thất bại");
    //     }
    // }

    public function checkUser($username, $password) {
        $sql = "SELECT * FROM tkk WHERE Tentaikhoan = ? AND Matkhau = ?";
        return mysqli_query($this->con, $sql);
    }
}
?>
