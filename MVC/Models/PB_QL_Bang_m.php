<?php
class PB_QL_Bang_m extends connectDB{
    public function pbbang_find($tensv, $nien_khoa){
        $sql="SELECT * FROM bangtotnghiep 
        WHERE TenSinhVien like '%$tensv%' 
        and MaSinhVien like '%$nien_khoa%'";
        return mysqli_query($this->con,$sql);
    }
    public function pbbang_load($makhoa,$tensv, $lop){
        $sql="SELECT sinhvien*
        FROM sinhvien 
        WHERE MaKhoa='$makhoa'and HoTen like '%$tensv%' 
        and Lop like '%$lop%'";
        return mysqli_query($this->con,$sql);
    }
}
?>