<?php 
class yeucau_chungchi extends controller{
    private $ds;
    function __construct()
    {
        $this->ds=$this->model('chungchi');
    }
    function Get_data(){
        $this->view('nhapchungchi',[
            'page'=>'nhapchungchi'
        ]);
    }
    function themmoi(){
        if(isset($_POST['btnyeucau'])){
            $macc = $_POST['txtmacc'];
            $tencc = $_POST['txttencc'];
            $loaicc = $_POST['slloaicc'];
            $tensv = $_POST['txttensv'];
            $masv = $_POST['txtmasv'];
            $ngaycapcc = $_POST['txtngaycapcc'];
            $trangthai = !empty($trangthai) ? $trangthai : 'Chờ duyệt';
        
            $kq1=$this->ds->checktrungmacc($macc);
            
            if($kq1){
                echo '<script>alert("Trùng mã chứng chỉ!")</script>';
                
            }
           
            else{
           
                $kq=$this->ds->insertcc($macc,$tencc,$loaicc,$tensv,$masv,$ngaycapcc,$trangthai);
                if($kq)
                    echo '<script>alert("Thêm mới thành công!")</script>';
                else
                    echo '<script>alert("Thêm mới thất bại!")</script>';
            }
         
            $this->view('Masterlayout',[
                'page'=>'nhapchungchi',
                'macc'=>$macc,
                'tencc'=>$tencc,
                'loaicc'=>$loaicc,
                'tensv'=>$tensv,
                'masv'=>$masv,
                'ngaycapcc'=>$ngaycapcc,
            ]);
        }
    }
}
?>
