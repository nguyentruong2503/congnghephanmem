<?php
class controller{
    public function model($model) {
        include_once __DIR__ . '/../Models/' . $model . '.php'; 
        return new $model;
    }

    public function view($view, $data = [], $useLayout = true){
        if ($useLayout) {
            include_once './MVC/Views/Masterlayout.php';
        }
        
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        include_once './MVC/Views/Pages/' . $view . '.php';
    }
}
?>