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
       
    }
?>