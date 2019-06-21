<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_management extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('user_id'))
			return redirect('login');
	}

	public function index()
	{
		$ads = $this->ads_model->ads_details();
		$this->load->view('ads_management', ['ads'=>$ads]);
	}

	public function am_show_details($am_detail_id)
	{
		$am_details = $this->ads_model->am_show_details_model($am_detail_id);
		$this->load->view('modals/am_details_form', ['am_details'=>$am_details]);
	}

	public function am_show_image_gallery($am_img_number, $am_img_id)
	{
		$this->load->view('modals/image_gallery_modal', ['img_gallery'=>$am_img_number,'img_id'=>$am_img_id]);
	}
}