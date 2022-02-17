<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/template/header');
        $this->load->view('backend/template/sidebar');
        $this->load->view('backend/dashboard/view');
        $this->load->view('backend/template/footer');
        
    }
}
?>
