<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
    var $categoriesArray = [
        'woman'=>'Женская одежда',
        'man'=>'Мужская одежда',
        'kids'=>'Детская одежда',
    ];

    public function index()
    {
        $data['template'] = 'product';
        $data['menu'] = $this->categoriesArray;
        $this->load->view('layout',$data);
    }

    public function product() {
        $data['menu'] = $this->categoriesArray;
        $id = $this->uri->segment(2);
        $data['template'] = 'product';
        $data['id'] = $id;
        $this->load->view('layout', $data);
    }

    public function category() {
        $name = $this->uri->segment(2);
        $data['menu'] = $this->categoriesArray;

        if(!$name || empty($this->categoriesArray[$name]))
        {
            show_404();
        }
        $data['template'] = 'category';
        $data['name'] = $this->categoriesArray[$name];
        $this->load->view('layout', $data);
    }
}