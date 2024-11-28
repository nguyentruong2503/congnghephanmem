<?php 
class Danhsachtk extends controller{
    private $ds;
    function __construct()
    {
        $this->ds=$this->model('tk_m');
    }

    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'Danhsachtk_v',
            'dulieu'=>$this->ds->tk_find('',''),
            'dulieutennv'=>$this->ds->tennv()
        ]);
    }
//themmoi
    function themmoi(){
        if(isset($_POST['btnSave'])){
            $tentk=$_POST['txtTentk'];
            $mk=$_POST['txtMk'];
            $loaitk=$_POST['txtLoaitk'];
            //Kiểm tra thiếu dữ liệu
            if($tentk =='' ||$mk =='' || $loaitk == ''){
                echo '<script>alert("Thiếu dữ liệu!");
                    window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
            }
            else{
                $kq1=$this->ds->check_trung($tentk);
             
                if($kq1){
                    echo '<script>alert("Trùng Tên Tài Khoản");
                    window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
                }
                else{
                    $kq=$this->ds->tk_insert($tentk,$mk,$loaitk);
                    if($kq)
                            echo '<script>alert("Thêm mới thành công!");
                            window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
                        else
                            echo '<script>alert("Thêm mới thất bại!");
                            window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
                }
            //gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'Danhsachtk_v',
                'dulieu'=>$this->ds->tk_find('',''),
                'dulieutennv'=>$this->ds->tennv()
            ]);
        }
        
    }
}
//end
//timkiem
   
    function xoa($tentk){

        $kq=$this->ds->tk_delete($tentk);
        if($kq){
            echo '<script>alert("Xóa thành công!")</script>';
        }
        else{
            echo '<script>alert("Xóa thất bại!")</script>';
        }
        //Gọi lại giao diện
        $this->view('Masterlayout',[
            'page'=>'Danhsachtk_v',
            'dulieu'=>$this->ds->tk_find('','')
        ]);
    }
    
    //sua
    function sua($manguoidung){
        $this->view('Masterlayout',[
            'page'=>'Danhsachtk_sua_v',
            'dulieu'=>$this->ds->tk_findsua($manguoidung)
        ]); 
    }
    //end sua
    //thaotac sua
    function suadl(){
        if(isset($_POST['btnSave'])){
            $tentk=$_POST['txtTentk'];
            $mk=$_POST['txtMk'];
            $loaitk=$_POST['txtLoaitk'];
            //Kiểm tra thiếu dữ liệu
            if($tentk =='' ||$mk =='' || $loaitk == ''){
                echo '<script>alert("Thiếu dữ liệu!");
                window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
            }
            else{
                $kq=$this->ds->tk_update($tentk,$mk,$loaitk);
                if($kq)
                    echo '<script>alert("Sửa thành công!");
                    window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
            
            }   
            //gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'Danhsachtk_v',
                'dulieu'=>$this->ds->tk_find('','')
            ]);
        }
    }
        
    }
    //end xuat + tk
    //xoa
    
    // //end thao tac sua
    // }

?>