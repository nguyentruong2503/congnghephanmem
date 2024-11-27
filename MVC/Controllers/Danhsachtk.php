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
    // function timkiem(){
    //     if(isset($_POST['btnTimkiem'])){
    //         $manguoidung=$_POST['txtManguoidung'];
    //         $tentk=$_POST['txtTentk'];
    //         if($manguoidung == '' && $tentk == ''){
    //             echo '<script>alert("Vui lòng nhập dữ liệu");
    //                 window.location.href = "http://localhost/quanlysieuthi/Danhsachtk";</script>';
    //         }
    //         else{
    //             $dl=$this->ds->tk_find($manguoidung,$tentk);
    //             $dl1=$this->ds->tennv();
    //             //Gọi lại giao diện và truyền $dl ra
    //             $this->view('Masterlayout',[
    //             'page'=>'Danhsachtk_v',
    //             'dulieu'=>$dl,
    //             'dulieu1'=>$dl1,
    //             'manguoidung'=>$manguoidung,
    //             'tentk'=>$tentk
    //         ]);
    //         }  
    //     }

        //Xuất excel
        // if(isset($_POST['btnExcel'])){
        //     //code xuất excel
        //     $objExcel=new PHPExcel();
        //     $objExcel->setActiveSheetIndex(0);
        //     $sheet=$objExcel->getActiveSheet()->setTitle('DSTK');
        //     $rowCount=1;
        //     //Tạo tiêu đề cho cột trong excel
        //     $sheet->setCellValue('A'.$rowCount,'STT');
        //     $sheet->setCellValue('B'.$rowCount,'Tên tên tài khoản');
        //     $sheet->setCellValue('C'.$rowCount,'Mật khẩu');
        //     $sheet->setCellValue('D'.$rowCount,'Loại Tài Khoản');
            
        
        //     //định dạng cột tiêu đề
        //     $sheet->getColumnDimension('A')->setAutoSize(true);
        //     $sheet->getColumnDimension('B')->setAutoSize(true);
        //     $sheet->getColumnDimension('C')->setAutoSize(true);
        //     $sheet->getColumnDimension('D')->setAutoSize(true);
            
        //     //gán màu nền
        //     $sheet->getStyle('A1:D1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
        //     //căn giữa
        //     $sheet->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //     //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
        //     $manguoidung=$_POST['txtManguoidung'];
        //     $tentk=$_POST['txtTentk'];
        //     $data=$this->ds->tk_find($manguoidung,$tentk);
        //     $i=1;
        //     while($row=mysqli_fetch_array($data)){
        //         $rowCount++;
        //         $sheet->setCellValue('A'.$rowCount,$i++);
        //         $sheet->setCellValue('B'.$rowCount,$row['tentk']);
        //         $sheet->setCellValue('C'.$rowCount,$row['mk']);
        //         $sheet->setCellValue('D'.$rowCount,$row['loaitk']);
        //     }
        //     //Kẻ bảng 
        //     $styleAray=array(
        //         'borders'=>array(
        //             'allborders'=>array(
        //                 'style'=>PHPExcel_Style_Border::BORDER_THIN
        //             )
        //         )
        //         );
        //     $sheet->getStyle('A1:'.'D'.($rowCount))->applyFromArray($styleAray);
        //     $objWriter=new PHPExcel_Writer_Excel2007($objExcel);
        //     $fileName='ExportExcel_tkdanhsach.xlsx';
        //     $objWriter->save($fileName);
        //     header('Content-Disposition: attachment; filename="'.$fileName.'"');
        //     header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
        //     header('Content-Length: '.filesize($fileName));
        //     header('Content-Transfer-Encoding:binary');
        //     header('Cache-Control: must-revalidate');
        //     header('Pragma: no-cache');
        //     readfile($fileName);
        //     }
    }
    //end xuat + tk
    //xoa
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
            //Kiểm tra trùng mã loại
            // $kq1=$this->ds->check_trung($tentk);
            // if($kq1){
            //     echo '<script>alert("Trùng Tên Tài Khoản");
            //     window.location.href = "http://localhost/congnghephanmem/Danhsachtk/";</script>';
            // }
            // else{
            // //gọi hàm chèn dl loaisp_insert trong model tk_m
            //     $kq=$this->ds->tk_update($manguoidung,$tentk,$mk,$loaitk);
            //     if($kq)
            //         echo '<script>alert("Sửa thành công!");
            //         window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
            //     else
            //         echo '<script>alert("Sửa thất bại!");
            //         window.location.href = "http://localhost/congnghephanmem/Danhsachtk";</script>';
            // }
            }   
            //gọi lại giao diện
            $this->view('Masterlayout',[
                'page'=>'Danhsachtk_v',
                'dulieu'=>$this->ds->tk_find('','')
            ]);
        }
    }
    // //end thao tac sua
    // }

?>