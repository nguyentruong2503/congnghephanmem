<?php
    class tk_m extends connectDB{
        function tennv(){
            $sql="SELECT Tentaikhoan From tkk";                     
           return mysqli_query($this->con,$sql);
        }
        function tk_find($manguoidung,$tentk){
            $sql = "SELECT * FROM tkk WHERE Tentaikhoan like '%$manguoidung%'
            and Matkhau like '%$tentk%' ";
            
            return mysqli_query($this->con,$sql);
        }
        
        function tk_insert($tentk,$mk,$loaitk){
            $sql= "INSERT INTO tkk VALUES ('$tentk','$mk','$loaitk') ";
            return mysqli_query($this->con,$sql);
        }

        function tk_delete($manguoidung){
            $sql = "DELETE FROM tkk WHERE Tentaikhoan = '$manguoidung' ";
            return mysqli_query($this->con,$sql);
        }

        function tk_update ($tentk, $mk, $loaitk){
            $sql= "UPDATE tkk SET `Matkhau`='$mk',`Loaitaikhoan`='$loaitk' WHERE `Tentaikhoan`='$tentk' ";
            return mysqli_query($this->con,$sql);
        }

        function tk_findsua($manguoidung){
            $sql = "SELECT * FROM tkk WHERE Tentaikhoan = '$manguoidung' ";
            
            return mysqli_query($this->con,$sql);
        }

        function check_trung($tentk){
            $sql = "SELECT Tentaikhoan FROM tkk WHERE Tentaikhoan = '$tentk'";
            $dl=mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dl)>0){
                $kq=true;
            }
            return $kq;
        }
        
      
        
    }
?>