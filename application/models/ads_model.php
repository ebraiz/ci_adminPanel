<?php 

class Ads_model extends CI_Model
{	
	public function ads_details()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
		->select(array('ads_id','user_id','category','title','price','feature_date'))
		//->from('ads_management')
		//->where('user_id', $user_id)
		->get('ads_management');

		return $query->result();
	}

	public function am_show_details_model($am_detail_id)
	{
		$query = $this->db
		->select(['ads_id','user_id','category','title','price','feature_date','description','seller_location','image_gallery'])
		->where('ads_id', $am_detail_id)
		->get('ads_management');
		return $query->row();
	}

	public function am_img_gallery_model($am_img_id)
	{
		$query = $this->db
		->select('image_gallery')
		->where('ads_id', $am_img_id)
		->get('ads_management');
		return $query->row();
	}
}
