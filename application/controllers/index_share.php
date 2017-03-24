<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_share extends CI_Controller {

	/**
	 * @author Lailiyuan
	 */
	public function share_index(){
		// $data = $this->input->get();
		// var_dump($data);
		$this->load->view('index/shareIndex.html');
	}


}
