<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalesModel extends CI_Model {

		public function login($credentials)
		{
			$this->db->select('id,username,password');
			$this->db->where('username' , $credentials['username']);
			$this->db->where('password' , $credentials['password']);
			$query=$this->db->get('user');
			if($query->num_rows()==1)
			{
				$data['result']=TRUE;
				foreach ($query->result() as $row)
				{
					$data['id']=$row->id;
					$data['username']=$row->username;
        			$this->session->set_userdata($data);
				}
			}
			else
			{
				$data['result']=FALSE;
			}
			return $data;
		}
		public function userDetails()
		{
			$this->db->select('id,
								username
								');
			$query=$this->db->get('user');
			$i=0;
		foreach ($query->result() as $row)
		{
        	$data['user'][$i]['id']=$row->id;
        	$data['user'][$i]['username']=$row->username;
        	$i++;
        }
        $data['user']['total']=$i;
        return $data;
	}
	public function invDetails()
		{
			$this->db->select('id,
								item_id,
								name,
								category,
								price
								');
			$query=$this->db->get('item');
			$i=0;
		foreach ($query->result() as $row)
		{
        	$data['inv'][$i]['id']=$row->id;
        	$data['inv'][$i]['item_id']=$row->item_id;
        	$data['inv'][$i]['name']=$row->name;
        	$data['inv'][$i]['category']=$row->category;
        	$data['inv'][$i]['price']=$row->price;
        	$i++;
        }
        $data['inv']['total']=$i;
        return $data;
	}
	public function catDetails()
	{
			$this->db->select('id,
								name
								');
			$query=$this->db->get('category');
			$i=0;
		foreach ($query->result() as $row)
		{
        	$data['cat'][$i]['id']=$row->id;
        	$data['cat'][$i]['name']=$row->name;
        	$i++;
        }
        $data['cat']['total']=$i;
        return $data;
	}
	public function createUser($data)
	{
		$this->db->insert('user',$data);
	}
	public function createItem($data)
	{
		$this->db->insert('item',$data);
	}
	public function createCategory($data)
	{
		$this->db->insert('category',$data);
	}
}