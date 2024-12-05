<?php 
class dschungchi extends controller{
    private $ds;
    function __construct()
    {
        $this->ds=$this->model('chungchi');
    }
    function Get_data(){
        $this->view('dsyeucau_chungchi',[
            'page'=>'dsyeucau_chungchi',
            'dulieu'=>$this->ds->chungchi_find('','')
        ]);
    }

}
?>