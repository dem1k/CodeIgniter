<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $users_arr = [
            ['last_name'=>'Demidov','first_name'=>'A','middle_name'=>'G'],
            ['last_name'=>'Demidov','first_name'=>'V','middle_name'=>'G'],
            ['last_name'=>'Demidova','first_name'=>'V','middle_name'=>'V'],
            ['last_name'=>'Demidova','first_name'=>'M','middle_name'=>'N'],
        ];

		$this->load->view('welcome_message', [ 'f' => $users_arr ]);
	}
}
