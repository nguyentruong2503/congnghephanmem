<?php
class chart_m extends connectDB {

    public function sinhvienchuacapbang() {
        $sql = "SELECT 
        CASE 
        WHEN b.MaSinhVien IS NOT NULL THEN 'Sinh viên có bằng'
        ELSE 'Sinh viên không có bằng'
        END AS sv,
        COUNT(*) AS SoLuong
        FROM sinhvien sv
        LEFT JOIN bangtotnghiep b ON sv.MaSinhVien = b.MaSinhVien
        GROUP BY sv;
        ";
        
        $result = mysqli_query($this->con, $sql);
        if (!$result) {
            die("Query failed: " . mysqli_error($this->con)); 
        }
    
        $data1 = [
            "x" => [],
            "y" => []
        ];
    
        while ($row = $result->fetch_assoc()) {
            $data1["x"][] = $row["sv"];
            $data1["y"][] = $row["SoLuong"];
        }
    
        return $data1;
    }
    
    

    public function loaibang() {

        $sql = "SELECT 
        LoaiBang AS LoaiBang, 
        COUNT(*) AS SoLuong
        FROM bangtotnghiep
        GROUP BY LoaiBang;";
        $result = mysqli_query($this->con, $sql);

       
        $data = [
            "a" => [],
            "b" => []
        ];

        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $data["a"][] = $row["LoaiBang"];
                $data["b"][] = $row["SoLuong"];
            }
        }
        
        return $data;
    }
}
?>
