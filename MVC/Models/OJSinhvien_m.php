<?php
    class OJSinhvien_m extends connectDB{
        function tracuuchungchi($m1,$m,$loai){

            if($loai==1){
                $sql="SELECT * From bangtotnghiep WHERE TenSinhvien='$m1' and Masinhvien = '$m' ";             
            }
            elseif($loai==2){
                $sql="SELECT * From chungchi WHERE TenSinhvien='$m1' and Masinhvien = '$m' and LoaiChungChi=N'Ngoại ngữ'";             

            }
            elseif($loai==3){
                $sql="SELECT * From chungchi WHERE TenSinhvien='$m1' and Masinhvien = '$m' and LoaiChungChi=N'Tin học'";             
            }                             
           return mysqli_query($this->con,$sql);
        }
        function timkiem($m){
            $sql="SELECT * From sinhvien WHERE MaSinhVien ='$m'";                     
           return mysqli_query($this->con,$sql);
        }  
        function insertcc($macc, $tencc, $loaicc, $tensv, $masv, $ngaycapcc, $trangthai) {
    
            $sql = "INSERT INTO pheduyetchungchi 
             VALUES ('$macc', '$tencc', '$loaicc', '$tensv', '$masv', '$ngaycapcc', '$trangthai')";
            if (mysqli_query($this->con, $sql)) {
                return true;
            } else {
                echo "Lỗi SQL: " . mysqli_error($this->con);
                return false;
            }
        }
        function checktrungmacc($macc){
     
            $sql1 = "SELECT * FROM pheduyetchungchi WHERE MaChungChi='$macc'";
            $dl1 = mysqli_query($this->con, $sql1);
            
        
            $sql2 = "SELECT * FROM chungchi WHERE MaChungChi='$macc'";
            $dl2 = mysqli_query($this->con, $sql2);
        
           
            if (mysqli_num_rows($dl1) > 0 || mysqli_num_rows($dl2) > 0) {
                return true; 
            }
        
            return false; 
        } 
       
    }
?>