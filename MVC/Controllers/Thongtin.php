<?php
    class Thongtin extends controller{
        private $goi;
        function __construct(){
         $this->goi=$this->model("Thongtin_m");

        }
         function Get_data(){
          $this->view("Masterlayout",["page"=>"dstt","dulieu"=>$this->goi->timkiem("")]);
        }
       
        function timkiem(){ 
            if(isset($_POST['btnTimkiem'])){
                $mt=$_POST['txtmt'];
                $dl=$this->goi->timkiem($mt);
              $this->view("Masterlayout",["page"=>"dstt","dulieu"=>$dl,"mt"=>$mt]);

            }
            if(isset($_POST['btnxuat'])){
            //code xuất excel
            $objExcel=new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet=$objExcel->getActiveSheet()->setTitle('DSTT');
            $rowCount=1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A'.$rowCount,'STT');
            $sheet->setCellValue('B'.$rowCount,'Mã NV');
            $sheet->setCellValue('C'.$rowCount,'Tên NV');
            $sheet->setCellValue('D'.$rowCount,'Giới Tính');
            $sheet->setCellValue('E'.$rowCount,'Ngày Sinh');
            $sheet->setCellValue('F'.$rowCount,'Quê Quán');
            $sheet->setCellValue('G'.$rowCount,'SĐT');
        
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            //gán màu nền
            $sheet->getStyle('A1:G1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
            //căn giữa
            $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
            $mt=$_POST['txtmt'];
            $data=$this->goi->timkiem($mt);
        
            while($row=mysqli_fetch_array($data)){
                $sheet->setCellValue('A'.$rowCount,$rowCount++);
                $sheet->setCellValue('B'.$rowCount,$row['Manv']);
                $sheet->setCellValue('C'.$rowCount,$row['Tennv']);
                $sheet->setCellValue('D'.$rowCount,$row['Gioitinh']);
                $sheet->setCellValue('E'.$rowCount,$row['Ngaysinh']);
                $sheet->setCellValue('F'.$rowCount,$row['Quequan']);
                $sheet->setCellValue('G'.$rowCount,$row['Sdt']);
            
            }
            //Kẻ bảng 
            $styleAray=array(
                'borders'=>array(
                    'allborders'=>array(
                        'style'=>PHPExcel_Style_Border::BORDER_THIN
                    )
                )
                );
            $sheet->getStyle('A1:'.'C'.($rowCount))->applyFromArray($styleAray);
            $objWriter=new PHPExcel_Writer_Excel2007($objExcel);
            $fileName='ExportExcel.xlsx';
            $objWriter->save($fileName);
            header('Content-Disposition: attachment; filename="'.$fileName.'"');
            header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
            header('Content-Length: '.filesize($fileName));
            header('Content-Transfer-Encoding:binary');
            header('Cache-Control: must-revalidate');
            header('Pragma: no-cache');
            readfile($fileName);        

            }
          }
        function vthem(){
            $this->view("Masterlayout",["page"=>"themtt"]);

        }
        function them(){
            if(isset($_POST['btnThem'])){
                $m=$_POST['txtma'];
                $t=$_POST['txtten'];
                $ns=$_POST['txtns'];
                $ml=$_POST['txtml'];
                $mk=$_POST['txtmk'];
                $eml=$_POST['txteml'];
                if(empty($m)|| empty($t)|| empty($ns)|| empty($ml)|| empty($mk)|| empty($eml)){
                    echo '<script>alert("Hãy nhập đầy đủ thông tin")</script>';
                    $this->view("Masterlayout",
                    ["page"=>"themtt",
                    "mnv"=>$m,
                    "mca"=>$t,
                    "ns"=>$ns,
                    "ml"=>$ml,
                    "mk"=>$mk,
                    "eml"=>$eml
                    ]);


                }else{
                      if($this->goi->trungma($m)){
                        echo '<script>alert("Mã nhập đã trùng")</script>';
                        $this->view("Masterlayout",
                        ["page"=>"themtt",
                        "mnv"=>$m,
                        "mca"=>$t,
                        "ns"=>$ns,
                        "ml"=>$ml,
                        "mk"=>$mk,
                        "eml"=>$eml
                        ]);

                         }
                    else{
                           $kq=$this->goi->them($m,$t,$ns,$ml,$mk,$eml);
                              if($kq){
                                     echo '<script>alert("Thêm nhân viên mới thành công!")</script>';
                                     }
                              else{
                                    echo '<script>alert("Thêm nhân viên mới thất bại!")</script>';
                                  }   
                               $this->view("Masterlayout",["page"=>"dstt","dulieu"=>$this->goi->timkiem("")]);

                          }
                }

            }
        }
        function vsua($m){
            $this->view("Masterlayout",["page"=>"suatt","dulieu"=>$this->goi->tim($m)]);

        }
        function sua(){
            if(isset($_POST['btnSua'])){
                $m=$_POST['txtma'];
                $t=$_POST['txtten'];
                $ns=$_POST['txtns'];
                $ml=$_POST['txtml'];
                $mk=$_POST['txtmk'];
                $eml=$_POST['txteml'];
                if(empty($m)|| empty($t)|| empty($ns)|| empty($ml)|| empty($mk)|| empty($eml)){
                    echo '<script>alert("Hãy nhập đầy đủ thông tin")</script>';
                    $this->view("Masterlayout",["page"=>"suatt","dulieu"=>$this->goi->tim($m)]);

                }else{
                      $kq=$this->goi->sua($m,$t,$ns,$ml,$mk,$eml);
                if($kq){
                    echo '<script>alert("Sửa thành công!");
                    window.location.href = "http://localhost/congnghephanmem/Thongtin";</script>';
                }
                else{
                    echo '<script>alert("Sửa thất bại!")</script>';
                }
                $this->view("Masterlayout",["page"=>"dstt","dulieu"=>$this->goi->timkiem("")]);
                }
              
            }
        }
        function xoa($m){
            $kq=$this->goi->xoa($m);
            if($kq){
                echo '<script>alert("Xóa thành công!")</script>';
            }
            else{
                echo '<script>alert("Xoá thất bại!")</script>';
            }
            $this->view("Masterlayout",["page"=>"dstt","dulieu"=>$this->goi->timkiem("")]);

        }
    }
?>