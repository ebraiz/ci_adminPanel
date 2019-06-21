<?php 

class Categories_model extends CI_Model
{	
	public function categories_details()
	{
		$query = $this->db
			->select(['category_id','category_name'])
			->get('categories_management');
			return $query->result();
	}

	public function cm_add_category_model($array)
	{
		return $this->db->insert('categories_management', $array);
	}

	public function cm_find_category($edit_category_id)
	{
		$query = $this->db
		->select(['category_id', 'category_name'])
		->where('category_id', $edit_category_id)
		->get('categories_management');
		return $query->row();
	}

	public function cm_update_category($edit_category_id, Array $category)
	{
		return $this->db
			->where('category_id', $edit_category_id)
			->update('categories_management', $category);
	}

	public function cm_delete_category($delete_category_id)
	{
		return $this->db->delete('categories_management', ['category_id'=>$delete_category_id]);
	}
}