<?php 

class Jmmao_model extends CI_Model
{	
	public function jmmao_details()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
		->select(['jmmao_id','name','logo','dis_percentage','from_avail','to_avail','website'])
		//->from('ads_management')
		//->where('user_id', $user_id)
		->get('jmmao_store');

		return $query->result();
	}

	public function js_add_category_model($array)
	{
		return $this->db->insert('jmmao_store', $array);
	}

	public function js_details_form($js_details_id)
	{
		$query = $this->db
		->select(['jmmao_id','name','logo','dis_percentage','from_avail','to_avail','website'])
		->where('jmmao_id', $js_details_id)
		->get('jmmao_store');
		return $query->row();
	}

	public function js_show_image_modal($js_image_id)
	{
		$query = $this->db
		->select(['jmmao_id','logo'])
		->where('jmmao_id', $js_image_id)
		->get('jmmao_store');
		return $query->row();
	}

	public function js_details_update_form($js_detail_id, Array $detail)
	{
		return $this->db->where('jmmao_id', $js_detail_id)->update('jmmao_store', $detail);
	}

	public function js_delete_detail($delete_detail_id)
	{
		return $this->db->delete('jmmao_store', ['jmmao_id'=>$delete_detail_id]);
	}
}