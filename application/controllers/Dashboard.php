<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('Template_admin/Header',$data);
        $this->load->view('Template_admin/Sidebar');
        $this->load->view('Admin/Dashboard',$data);
        $this->load->view('Template_admin/Footer');
    }
}

?>