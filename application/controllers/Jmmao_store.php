<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jmmao_store extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('user_id'))
			return redirect('login');
	}

	public function index()
	{
		$jmmao_store = $this->jmmao_model->jmmao_details();
		$this->load->view('jmmao_store', ['jmmao_stores'=>$jmmao_store]);
	}

	public function js_add_category()
	{
		$post = $this->input->post();
		unset($post['submit']);
		$value = $this->jmmao_model->js_add_category_model($post);
		$this->flash_redirect($value, "Category Added Successfully!", "Category Failed To Add, Please Try Again.");
	}

	public function js_details_form($js_details_id)
	{
		$js_details = $this->jmmao_model->js_details_form($js_details_id);
		$this->load->view('modals/js_details_form', ['js_details'=>$js_details]);
	}

	public function js_show_large_image($js_large_id)
	{
		$JS_large_image = $this->jmmao_model->js_show_image_modal($js_large_id);
		$this->load->view('modals/show_large_image_modal', ['JS_large_image'=>$JS_large_image]);
	}

	public function js_details_update_form()
	{
		$config = [
			'upload_path' => './uploads', 
			'allowed_types' => 'jpg|gif|png|jpeg',
			'max_size'	=> '100',
			'max_width' => '1024',
			'max_height' => '768'
		];
		$this->upload->initialize($config);
		$this->upload->do_upload();
		$post = $this->input->post();
		$js_detail_id = $post['jmmao_id'];
		unset($post['submit'], $post['jmmao_id']);
		$image_data = $this->upload->data();
		$image_path = base_url("uploads/".$image_data['raw_name'].$image_data['file_ext']);

		if($image_path == base_url("uploads/")){
			$image_path = $post['logo'];
		}
		
		$post['logo'] = $image_path;
		$value = $this->jmmao_model->js_details_update_form($js_detail_id, $post);
		$this->flash_redirect($value, "Details are Updated Successfully!", "Details Failed to Update, Please Try Again.");
	}

	public function js_delete_details($delete_detail_id)
	{
		$value = $this->jmmao_model->js_delete_detail($delete_detail_id);
		$this->flash_redirect($value, "Detail has been Deleted Successfully!", "Detail is Failed to Delete, Please Try Again.");
	}

	private function flash_redirect($successful, $successMessage, $failureMessage)
	{
		if( $successful )
		{
			//Insert Successful
			$this->session->set_flashdata('feedback', $successMessage);
			$this->session->set_flashdata('feedback_class', "alert-success");
		
		}else{
			//Inserting Failed.
			$this->session->set_flashdata('feedback', $failureMessage);
			$this->session->set_flashdata('feedback_class', "alert-danger");
		}
		return redirect('jmmao_store');
	}
}