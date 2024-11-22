<?php
class UserModel {
    private $connect;

    public function __construct() {
        $this->connect = mysqli_connect('localhost', 'root', '', 'cnpm');
        if ($this->connect) {
            mysqli_query($this->connect, "SET NAMES 'UTF8'");
        } else {
            die("Kết nối thất bại");
        }
    }

    public function checkUser($username, $password) {
        $sql = "SELECT * FROM tkk WHERE Tentaikhoan = ? AND Matkhau = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>
