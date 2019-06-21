<?php 

class Login_model extends CI_Model
{	
	public function login_valid( $email, $password)
	{
		$query = $this->db->where(['email'=>$email,'password'=>$password])->get('users');

		if( $query->num_rows() )
		{
			//print_r($query->result()); exit;
			return $query->row()->user_id;
			//return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

?>