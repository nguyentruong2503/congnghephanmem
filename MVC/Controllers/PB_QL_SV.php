<?php
class PB_QL_SV extends controller{
    private $dssv;
    function __construct()
    {
        $this->dssv=$this->model('PB_QL_SV_m');
    }
    function Get_data(){
        $this->view('Masterlayout_PB',[
            'page'=>'PB_QL_SV_View',
            'dulieu'=>$this->dssv->pbsv_find('','')
        ]);
    }

    function fillter() {
        // Lấy giá trị từ form
        $ten_tk = $_POST['ten_tk'];  // Tên sinh viên
        $filter = $_POST['filter'];   // Lọc theo nút (ALL, K71, K72, K73, K74, K75)
    
        // Kiểm tra nếu không có dữ liệu nào được nhập hoặc chọn
        if ($ten_tk == '' && $filter == '') {
            echo '<script>window.location.href = "http://localhost/congnghephanmem/PB_QL_SV";
            </script>';
        } else {
            // Xử lý lọc dữ liệu
            if ($filter == 'ALL') {
                $dl = $this->dssv->pbsv_find($ten_tk, '');
            } 
            
            else {
                $dl = $this->dssv->pbsv_find($ten_tk, $filter);
            }
    
            // Gọi lại giao diện và truyền $dl ra
            $this->view('Masterlayout_PB', [
                'page' => 'PB_QL_SV_View',
                'dulieu' => $dl,
                'ten_tk' => $ten_tk,   // Truyền giá trị của tên sinh viên
                'filter' => $filter    // Truyền giá trị của nút lọc
            ]);
        }
    }

    function add(){
        if(isset($_POST['btnSave'])){
            $masv=$_POST['masv'];
            $tensv=$_POST['tensv'];
            $ngaysinh=$_POST['ngaysinh'];
            $lop=$_POST['lop'];
            $email=$_POST['email'];

            //Kiểm tra thiếu dữ liệu      
            if($masv =='' ||$tensv =='' ||$ngaysinh =='' ||$lop =='' ||$email =='' ){
                echo '<script>alert("Thiếu dữ liệu!");
                    window.location.href = "http://localhost/congnghephanmem/PB_QL_SV";</script>';
            }
            else{
                // //Kiểm tra trùng mã loại
                // $kq1=$this->dssv->checkmasv($masv);
                // if($kq1){
                //     echo '<script>alert("Trùng mã sinh viên");
                //     window.location.href = "http://localhost/congnghephanmem/PB_QL_SV";</script>';
                // }
                // else{
                    
                // }//gọi hàm chèn dl kh_insert trong model kh_m
                    $kq=$this->dssv->sv_add($masv, $tensv, $ngaysinh, $lop, $email);
                    if($kq)
                        echo '<script>alert("Thêm mới thành công!");
                    window.location.href = "http://localhost/congnghephanmem/PB_QL_SV";</script>';
                    else
                        echo '<script>alert("Thêm mới thất bại!");
                    window.location.href = "http://localhost/congnghephanmem/PB_QL_SV";</script>';
            }
            //gọi lại giao diện
            $this->view('Masterlayout_PB',[
                'page'=>'PB_QL_SV_View',
                'masv'=>$masv,
                'tensv'=>$tensv,
                'ngaysinh'=>$ngaysinh,
                'lop'=>$lop,
                'email'=>$email
                
            ]);
        }
    }
}
?>