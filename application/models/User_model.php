<?php

class User_model extends CI_Model
{
	public function login($username, $password,$table_name)
	{
		$query = $this->db->get_where($table_name, array(
			'username'=>$username,
			'password'=>md5($password),
		));
		return $query->row();
	}

	public function username_exists($username, $username_lama,$tb)
	{
		$query = $this->db->get_where($table_name, array(
			'username'=>$username,
			'username <>'=>$username_lama,
		));
		return $query->num_rows() > 0;
	}

	public function update_akun($username_lama, $username, $password_baru,$tb)
	{
		$data = array('username'=>$username);
		!$password_baru || $data['password'] = md5($password_baru);
		return $this->db->update($table_name, $data, array('username'=>$username_lama));
	}
}
