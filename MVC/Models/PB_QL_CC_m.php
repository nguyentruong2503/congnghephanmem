<?php
class PB_QL_CC_m extends connectDB{
    public function pbcc_find($tensv, $nien_khoa){
        $sql="SELECT * FROM chungchi WHERE TenSinhVien like '%$tensv%' 
        and MaSinhVien like '%$nien_khoa%'";
        return mysqli_query($this->con,$sql);
    }
    public function pbcc_load($makhoa,$tensv, $lop){
        $sql="SELECT sinhvien*
        FROM sinhvien 
        WHERE MaKhoa='$makhoa'and HoTen like '%$tensv%' 
        and Lop like '%$lop%'";
        return mysqli_query($this->con,$sql);
    }
}
?>