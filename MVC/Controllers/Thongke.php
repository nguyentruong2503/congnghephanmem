<?php
class Thongke extends controller {
    private $chartModel;

    public function __construct() {
        $this->chartModel = $this->model('chart_m');
    }

    public function Get_data() {
        // Lấy dữ liệu từ Model
        $data = $this->chartModel->getChartData();

        // Truyền dữ liệu sang View
        $this->view('Masterlayout', [
            'page' => 'chart_view',
            'dulieu' => $data
        ]);
    }
}
?>
