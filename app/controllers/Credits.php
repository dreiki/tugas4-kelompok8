<?php

class Credits extends Controller{
  public function index(){
    $params["title"] = "Credits";
    $this->view('templates/header', $params);
    $this->view('credits/index');
    $this->view('templates/footer');
    
  }
}