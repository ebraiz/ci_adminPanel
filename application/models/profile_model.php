<?php 

class Profile_model extends CI_Model
{	
	public function find_user($admin_user_id)
	{
		$query = $this->db
		->select(['user_id','admin_name','email','new_password', 'confirm_password', 'profile_img'])
		->where('user_id', $admin_user_id)
		->get('users');
		return $query->row();
	}

	public function profile_update($edit_profile_id, Array $profile)
	{
		return $this->db
			->where('user_id', $edit_profile_id)
			->update('users', $profile);
	}

	/*public function cm_add_category_model($array)
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
	}*/
}