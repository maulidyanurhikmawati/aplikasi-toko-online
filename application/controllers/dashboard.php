<?php

class Dashboard extends CI_controller{
	public function index()
	{
		$data['barang']=$this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
		$this->load->view('dashboard',$data);
	}
}