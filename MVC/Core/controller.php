<?php
class controller{
    public function model($model) {
        include_once __DIR__ . '/../Models/' . $model . '.php'; // Sử dụng __DIR__
        return new $model;
    }
    

    public function view($view, $data = []) {
        include_once './MVC/Views/' . $view . '.php';
    }
}
?>