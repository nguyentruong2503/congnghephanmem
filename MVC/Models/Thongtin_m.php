<?php
    class Thongtin_m extends connectDB{
        function tim($m){
            $sql="SELECT * From sinhvien WHERE MaSinhVien = '$m'";                     
           return mysqli_query($this->con,$sql);
        }
        function timkiem($m,$makhoa){
            $sql="SELECT * From sinhvien WHERE( MaSinhVien like '%$m%'OR HoTen like '%$m%') and MaKhoa='$makhoa'";                     
           return mysqli_query($this->con,$sql);
        }
        function them($m,$t,$gt,$ns,$qq,$sdt){
            $sql="INSERT INTO `sinhvien`(`MaSinhVien`, `HoTen`, `NgaySinh`, `Lop`, `MaKhoa`, `Email`) VALUES
             ('$m','$t','$gt','$ns','$qq','$sdt')";
             return mysqli_query($this->con,$sql);
        }
        function sua($m,$t,$gt,$ns,$qq,$sdt){
           $sql=" UPDATE `sinhvien` SET 
           `HoTen`='$t',`NgaySinh`='$gt',`Lop`='$ns',
           `MaKhoa`='$qq',`Email`='$sdt' WHERE `MaSinhVien`='$m' ";
            return mysqli_query($this->con,$sql);
        }
        function xoa($m){
            $sql="DELETE FROM sinhvien WHERE `MaSinhVien`='$m' ";
          
            return mysqli_query($this->con,$sql);
        }
        function trungma($mnv){
            $sql=" SELECT * FROM sinhvien WHERE `MaSinhVien`='$mnv' ";
            $dl= mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)>0){
                $kq=true;
            }
            return $kq;
        }
    }
?>