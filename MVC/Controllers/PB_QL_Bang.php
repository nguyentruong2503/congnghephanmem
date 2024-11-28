<?php
class PB_QL_Bang extends controller{
    private $dssv;
    function __construct()
    {
        $this->dssv=$this->model('PB_QL_Bang_m');
    }
    function Get_data(){
        $this->view('Masterlayout_PB',[
            'page'=>'PB_QL_Bang_View',
            'dulieu'=>$this->dssv->pbbang_find('','')
        ]);
    }
    function fillter() {
        // Lấy giá trị từ form
        $ten_tk = $_POST['ten_tk'];  // Tên sinh viên
        $filter = $_POST['filter'];   // Lọc theo nút (ALL, K71, K72, K73, K74, K75)
    
        // Kiểm tra nếu không có dữ liệu nào được nhập hoặc chọn
        if ($ten_tk == '' && $filter == '') {
            echo '<script>window.location.href = "http://localhost/congnghephanmem/PB_QL_Bang";
            </script>';
        } else {
            // Xử lý lọc dữ liệu
            if ($filter == 'ALL') {
                $dl = $this->dssv->pbbang_find($ten_tk, '');
            } 
            
            else {
                $dl = $this->dssv->pbbang_find($ten_tk, $filter);
            }
    
            // Gọi lại giao diện và truyền $dl ra
            $this->view('Masterlayout_PB', [
                'page' => 'PB_QL_Bang_View',
                'dulieu' => $dl,
                'ten_tk' => $ten_tk,   // Truyền giá trị của tên sinh viên
                'filter' => $filter    // Truyền giá trị của nút lọc
            ]);
        }
    }
}
?>