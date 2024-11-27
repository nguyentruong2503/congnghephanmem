<?php
    class Profile extends controller{
        private $goi;
        function __construct(){
         $this->goi=$this->model("OJSinhvien_m");

        }
         function Get_data(){
          $this->view("Masterlayout",["page"=>"userdetails","dulieu"=>$this->goi->timkiem("SV001")]);
        }
       
        function timkiem(){ 
            if(isset($_POST['btnTimkiem'])){
                $mt=$_POST['txtmt'];
                $dl=$this->goi->timkiem($mt);
              $this->view("Masterlayout",["page"=>"dstt","dulieu"=>$dl,"mt"=>$mt]);

            }
           
          }
      
    }
?>