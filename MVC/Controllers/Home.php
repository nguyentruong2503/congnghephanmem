<?php

//home ke thua controller
class Home extends controller{
    function Get_data(){
        $this->view('Masterlayout_PB',[ 
            'page' => 'hienthi',
        ]);
    }
}
?>
