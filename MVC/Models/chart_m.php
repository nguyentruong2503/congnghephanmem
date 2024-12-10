<?php
class chart_m extends connectDB {
    public function getChartData() {

        $sql = "SELECT month, value FROM sales ORDER BY month ASC";
        $result = mysqli_query($this->con, $sql);

       
        $data = [
            "labels" => [],
            "data" => []
        ];

        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $data["labels"][] = $row["month"];
                $data["data"][] = $row["value"];
            }
        }
        
        return $data;
    }
}
?>
