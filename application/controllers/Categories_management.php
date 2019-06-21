<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_management extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('user_id'))
			return redirect('login');
	}

	public function index()
	{
		$categories = $this->categories_model->categories_details();	
		$this->load->view('categories_management', ['categories'=>$categories]);
	}

	public function cm_add_category()
	{
		$config = [
			'upload_path' => './uploads', 
			'allowed_types' => 'jpg|gif|png|jpeg',
			'max_size'	=> '100',
			'max_width' => '1024',
			'max_height' => '768'
		];
		$this->upload->initialize($config);

		/*if($this->upload->do_upload())
		{*/
			$this->upload->do_upload();
			$post = $this->input->post();
			unset($post['submit']);
			$image_data = $this->upload->data();
			$image_path = base_url("uploads/".$image_data['raw_name'].$image_data['file_ext']);
			$post['image_path'] = $image_path;
			$value = $this->categories_model->cm_add_category_model($post);
			$this->flash_redirect($value, "Category Added Successfully!", "Category Failed To Add, Please Try Again.");
		/*}else{
			$upload_error = $this->upload->display_errors('<div class="text-danger">', '</div>');
			$categories = $this->categories_model->categories_details();	
			$this->load->view('categories_management', compact('upload_error'), ['categories'=>$categories]);
		}*/
	}

	public function cm_edit_category($edit_category_id)
	{
		$edit_categories = $this->categories_model->cm_find_category($edit_category_id);
		$this->load->view('modals/cm_edit_category_form', array('edit_categories'=>$edit_categories));
	}

	public function cm_update_category()
	{
		$post = $this->input->post();
		$edit_category_id = $post['category_id'];
		unset($post['submit'], $post['category_id']);
		$value = $this->categories_model->cm_update_category($edit_category_id, $post);
		$this->flash_redirect($value, "Category is Updated Successfully!", "Category Failed to Update, Please Try Again.");
	}

	public function cm_delete_category($delete_category_id)
	{
		$value = $this->categories_model->cm_delete_category($delete_category_id);
		$this->flash_redirect($value, "Category is Deleted Successfully!", "Category Failed to Delete, Please Try Again.");
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
			return redirect('categories_management');
		}
}