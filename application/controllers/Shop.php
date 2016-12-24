<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index()
    {
        $data['template'] = 'product';
        $this->load->view('layout');
    }

    public function product() {


        $id = $this->uri->segment(1);
        die(var_dump($id));
        $data['template'] = 'product';
        $data['id'] = $id;
        $this->load->view('layout',$data);
    }
}
