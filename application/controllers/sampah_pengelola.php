<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah_pengelola extends CI_Controller {

	public function index()
	{

		if ($this->session->userdata('login') == "sudah login"){ 
			if ($this->session->userdata('posisi') == "Pengelola") {
				$wheres = array (
								'deskripsi !=' => NULL, 
								'tgl_dikerjakan !=' => NULL,
								);
				$data['sampah_sudah'] = $this->model_data->select_where('data_sampah',$wheres);
				$data['main_view'] = 'data_sampah_pengelola';
        		$this->load->view('header_pengelola', $data);
			}else{
				redirect(base_url('index.php/auth'));
			}
				
		} else {
			redirect(base_url('index.php/auth'));
		}
	}
	public function tampilan_input_kelola()
	{

		if ($this->session->userdata('login') == "sudah login"){
			if ($this->session->userdata('posisi') == "Pengelola"){
				$where  = array('tgl_dikerjakan' => NULL, );
				$data['staff'] = $this->model_data->select_where('data_sampah', $where);
				$data['main_view'] = 'tampilan_input_sampah_pengelola';
        		$this->load->view('header_pengelola', $data);
			}else{
				redirect(base_url('index.php/auth'));
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}
	public function hapus_sampah() {
			if ($this->session->userdata('login') == "sudah login") {
				if ($this->session->userdata('posisi') == "Pengelola"){
					$a = $this->uri->segment(3);
			$go = $this->model_data->hapussampah($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('Sampah_pengelola');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('Sampah_pengelola');
			}
			}else{
				redirect(base_url('index.php/auth'));
			}
			
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	
	public function tampil_kelola_sampah() 
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Pengelola"){
				$a = $this->uri->segment(3);
		$data['key'] = $this->model_data->getsampah($a);
		$data['main_view']= 'input_sampah_pengelola';
		$this->load->view('header_pengelola', $data);
			}else{
				redirect(base_url('index.php/auth'));
			}
		
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function input_kelola_sampah()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Pengelola"){
				$foto = $this->upload();
		$id = $this->input->post('id');
		$data = array(
				 	'tgl_dikerjakan' => $this->input->post('tgl_dikerjakan'),
				 	'deskripsi' =>  $this->input->post('deskripsi'),
				 	'foto' =>  $foto
				 );

			$this->db->where('id',$id)
					 ->update('data_sampah', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('sampah_pengelola');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_pengelola');
			}
			}else{
				redirect(base_url('index.php/auth'));
			}
		
	} else {
			redirect(base_url('index.php/auth'));
		}
			
		}
			function upload(){
			$type = explode('.', $_FILES["foto"]["name"]);
			$type = $type[count($type)-1];
			$url = uniqid(rand()).'.'.$type;
			if(in_array($type, array("jpg","jpeg","png","PNG")))
				if(is_uploaded_file($_FILES["foto"]["tmp_name"]))
					if(move_uploaded_file($_FILES["foto"]["tmp_name"],"./assets/img/".$url))
						return $url;
					return "";
		}

			public function tampil_sampah_done() 
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Pengelola"){
				$a = $this->uri->segment(3);
				$data['key'] = $this->model_data->getsampah($a);
				$data['main_view']= 'edit_kelola_sampah';
				$this->load->view('header_pengelola', $data);
			}else{
				redirect(base_url('index.php/auth'));
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function edit_kelola_sampah()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Pengelola"){
		$id = $this->input->post('id');
		$data = array(
				 	'tgl_dikerjakan' => $this->input->post('tgl_dikerjakan'),
				 	'deskripsi' =>  $this->input->post('deskripsi'),
				 );

			$this->db->where('id',$id)
					 ->update('data_sampah', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('sampah_pengelola');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_pengelola');
			}
			}else{
				redirect(base_url('index.php/auth'));
			}
	} else {
			redirect(base_url('index.php/auth'));
		}
			
		}

		public function upload_foto()
	{	
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Pengelola") {
		$a = $this->uri->segment(3);
		$data['key'] = $this->model_data->getsampah($a);
		$data['main_view'] = 'edit_foto_pengelola';
		$this->load->view('header_pengelola', $data);
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		}else{
			redirect(base_url('index.php/user/auth'));
		}
	}

	public function simpan_foto()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Pengelola") {
			$id = $this->input->post('id');
			$foto = $this->upload();
			$data = array(
				 	'foto' => $foto
		 );

				$this->db->where('id', $id)
						 ->update('data_sampah', $data);
		
			if ($this->db->affected_rows() > 0){
				$this->session->set_flashdata('notif', 'berhasil');
					redirect('sampah_pengelola');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('sampah_pengelola');
			} 
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		}else{
			redirect(base_url('index.php/user/auth'));
		}
	}
}

/* End of file sampah_petugas.php */
/* Location: ./application/controllers/sampah_petugas.php */