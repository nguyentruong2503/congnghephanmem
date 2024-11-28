<?php
class PB_QL_SV_m extends connectDB{
    public function pbsv_find($tensv, $nien_khoa){
        $sql="SELECT * FROM sinhvien WHERE HoTen like '%$tensv%' 
        and MaSinhVien like '%$nien_khoa%'";
        return mysqli_query($this->con,$sql);
    }
    public function pbsv_load($makhoa,$tensv, $lop){
        $sql="SELECT sinhvien*
        FROM sinhvien 
        WHERE MaKhoa='$makhoa'and HoTen like '%$tensv%' 
        and Lop like '%$lop%'";
        return mysqli_query($this->con,$sql);
    }


    public function sv_add($masv, $tensv, $ngaysinh, $lop, $email){
        $sql="INSERT INTO sinhvien VALUES 
        ('$masv', '$tensv', '$ngaysinh','$lop','congnghethongtin_utt' , '$email')";

        $sql1="INSERT INTO taikhoan VALUES 
        ('$masv', '1' , 'sv')";
        return mysqli_query($this->con,$sql);
    }

    
    function checkmasv($masv){
        $sql="SELECT * FROM sinhvien Where MaSinhVien='$masv'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng tiêu đề
        }
        return $kq;
    }
}
?>