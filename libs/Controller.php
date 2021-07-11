<?php

class Controller{
    protected $layout;
    protected $view;
    protected $folder;
    protected $data_view=[];

    public function render(){

        $pathView="./frontend/".$this->folder."/".$this->view.".php";
          ob_start();
             extract($this->data_view);
           require_once($pathView);
    }
}
