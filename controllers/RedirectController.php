<?php
class RedirectController extends Controller{

   public  function __construct(){
      $this->folder="home";
    
   }

    public function index(){
        $this->view="row";
         $this->render();

    }




}