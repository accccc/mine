<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_index extends CI_Controller {

	/**
	 * @author Lailiyuan
	 */
	public function index(){
		// $data = $this->input->get();
		// var_dump($data);
		$this->load->view('index/index.html');
	}
	public function share_index(){
		$this->load->view('index/shareIndex.html');
	}

}
