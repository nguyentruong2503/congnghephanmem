<?php
class chart_m {
    public function getChartData() {
        // Dữ liệu mẫu (có thể lấy từ cơ sở dữ liệu)
        return [
            "labels" => ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5"],
            "data" => [10, 20, 15, 25, 30]
        ];
    }
}
?>
