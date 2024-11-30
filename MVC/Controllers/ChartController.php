<?php
class ChartController extends controller{
    private $chartModel;

    public function __construct() {
        $this->chartModel=$this->model('chart_m');
    }

    public function Get_data() {
        $data= [
            "labels" => ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5"],
            "data" => [10, 20, 30, 40, 50]
        ];

        $this->view('Pages/chart_view', $data);
    }
}
?>
