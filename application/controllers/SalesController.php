<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalesController extends CI_Controller {

	public function createItem()
	{
		if($this->isLoggedIn())
		{
			$credentials['item_id'] = $this->input->post('item_id');
			$credentials['name'] = $this->input->post('name');
			$credentials['category'] = $this->input->post('category');
			$credentials['price'] = $this->input->post('price');
			$this->SalesModel->createItem($credentials);
			redirect('add-item');
		}
		else
		{
			redirect('Login');
		}
	}
	public function createUser()
	{
		if($this->isLoggedIn())
		{
			$credentials['username'] = $this->input->post('username');
			$credentials['password'] = $this->input->post('password');
			$this->SalesModel->createUser($credentials);
			redirect('add-user');
		}
		else
		{
			redirect('Login');
		}
	}
	public function createCategory()
	{
		if($this->isLoggedIn())
		{
			$credentials['name'] = $this->input->post('name');
			$this->SalesModel->createCategory($credentials);
			redirect('add-cat');
		}
		else
		{
			redirect('Login');
		}
	}
	public function isLoggedIn()
	{
		if($this->session->userdata('username') && $this->session->userdata('id'))
		{
			$data['username']=$this->session->userdata('username');
			$data['id']=$this->session->userdata('id');
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
		
	}
	public function addCategory()
	{
		if($this->isLoggedIn())
		{
			$data=$this->SalesModel->catDetails();
			$this->load->view('category',$data);
		}
		else
		{
			redirect('Login');
		}
	}
	public function addInv()
	{
		if($this->isLoggedIn())
		{
			$data=$this->SalesModel->invDetails();
			$this->load->view('inv',$data);
		}
		else
		{
			redirect('Login');
		}
	}
	public function addItem()
	{
		if($this->isLoggedIn())
		{
			$data=$this->SalesModel->userDetails();
			$this->load->view('item',$data);
		}
		else
		{
			redirect('Login');
		}
	}
	public function addUser()
	{
		if($this->isLoggedIn())
		{
			$data=$this->SalesModel->userDetails();
			$this->load->view('user',$data);
		}
		else
		{
			redirect('Login');
		}
	}
	public function login()
	{
		if($this->isLoggedIn())
		{
			redirect('Dashboard');
		}
		else
		{
			if($this->input->post())
			{
				$email = $this->input->post('username');
				$password = $this->input->post('pass');
				$credentials['username']=$email;
				$credentials['password']=$password;
				$data=$this->SalesModel->login($credentials);
				if($data['result']==TRUE)
				{
					redirect('Dashboard');
				}
				else
				{
					$data['message']="Invalid Login Credentials Entered";
					$this->load->view('login',$data);
				}
			}
			else
			{
				$this->load->view('login');
			}
			
		}
		
		
	}
	public function Logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		redirect('Login');
	}
	public function dashboard()
	{

		if($this->isLoggedIn())
		{
			$this->load->view('home');
		}
		else
		{
			redirect('Login');
		}
	}
}
