<?php

class Dashboard extends Controller{
  public function index(){
    $params["title"] = "Dashboard";
    $params["data"] = $this->model("Penjualan_Model")->getReportAll();
    $this->view('templates/header', $params);
    $this->view('dashboard/index', $params);
    $this->view('templates/footer');
    
  }
}