<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('wstore_model');
		$this->load->helper('url_helper');
	}
	
	public function index()
	{
		$data['produk']=$this->wstore_model->get_barang();
		$this->load->view('index', $data);
	}

	public function login()
	{
		$user = $this->input->post('email');
		$pwd = $this->input->post('password');
		if($user == 'nitapurida@gmail.com' && $pwd == 'balala'){
			
			// $_SESSION["user"] = $user;
			$this->session->set_userdata( array ( 'user' => $user));
			redirect(site_url()."/admin/orderr");
		}else{
			$this->load->view('login');
		}
	}


	public function gallery($produk_id)
	{
		$produk['produk']=$this->wstore_model->newgallery($produk_id);
		$this->load->view('gallery', $produk);
	}

	public function finished($user_id)
	{
		$produk['produk']=$this->wstore_model->newgallery($produk_id);
		//ambil tabel array pesanan, pembayaran, bikin array baru history, terus delete duaduanya
	}

	public function addtocart($produk_id){
		$is_submit = $this->input->post('is_submit');
		$jumlahbeli = 1;
		if(isset($is_submit) && $is_submit == 1){
			$jumlahbeli = $this->input->post('jumlahbeli');
		}
		$data = array(
			'user_id' => $_SESSION['user_id'],
			'produk_id' => $produk_id,
			'jumlahbeli' => $jumlahbeli
			);
		$this->wstore_model->newtocart($data);
		redirect(site_url('cart/'.$_SESSION['user_id']));
	}

	public function cart($user_id)
	{
		$data['cart']=$this->wstore_model->get_cart($user_id);
		$this->load->view('cart', $data);
	}

	public function deletecart($produk_id){
		$this->wstore_model->deletecart($produk_id);
		$back = $this->session->userdata('user_id');
		redirect(site_url().'/cart/'.$back);
	}

	public function deleteorder($no_order){
		$this->wstore_model->deleteorder($no_order);
		redirect(site_url().'/deletepembayaran/'.$no_order);
	}

	public function deletepembayaran($no_order){
		$this->wstore_model->deletepembayaran($no_order);
		redirect(site_url().'/admin/orderr');
	}

	public function history(){
		$data['history']=$this->wstore_model->getHistory();
		$this->load->view('history', $data);
	}

	public function logout()
	{
		$this->load->view('logout');
	}


	public function updateStock($produk_id)
	{
		$this->load->model('wstore_model');
		$is_submit = $this->input->post('is_submit');

		if(isset($is_submit) && $is_submit == 1){
		$data = $this->input->post('jumlahstock');
		$id_barang = $this->input->post('produk_id');
		$this->wstore_model->set_update($produk_id, $data, $id_barang);
			redirect(site_url('admin/read'));
			
		} else{
			$data['produk']=$this->wstore_model->get_barang();
			$this->load->view('tables', $data);
		}
	}

	public function complainr()
	{
		$data['complain']=$this->wstore_model->get_complainr();
		$this->load->view('complain', $data);
	}

	public function complainc()
	{
		$this->load->model('wstore_model');

		$is_submit = $this->input->post('is_submit');

		if(isset($is_submit) && $is_submit == 1){
			
			$data =array(
				'custname' => $this->input->post('custname'),
				'custemail' => $this->input->post('custemail'),
				'custphone' => $this->input->post('custphone'),
				'custmsg' => $this->input->post('custmsg')
				); 
			$this->wstore_model->set_complain($data);
			redirect(base_url());
			
		} else{
			$data['produk']=$this->wstore_model->get_complainr();
			$this->load->view('index', $data);
		}
	}

	public function orderc()
	{
		$this->load->model('wstore_model');

		$is_submit = $this->input->post('is_submit');

		if(isset($is_submit) && $is_submit == 1){
			
			$data =array(
				'no_order' => $this->input->post('no_order'),
				'namadepan' => $this->input->post('namadepan'),
				'namabelakang' => $this->input->post('namabelakang'),
				'alamat' => $this->input->post('alamat'),
				'kota' => $this->input->post('kota'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kelurahan' => $this->input->post('kelurahan'),
				'provinsi' => $this->input->post('provinsi'),
				'kodepos' => $this->input->post('kodepos'),
				'alamat' => $this->input->post('alamat'),
				'telfon' => $this->input->post('telfon'),
				'email' => $this->input->post('email'),
				'pesanan' => $this->input->post('pesanan'),
				'totalpembayaran' => $this->input->post('totalpembayaran'),
				'notes' => $this->input->post('notes')
				); 
			$this->wstore_model->set_order($data);
			session_destroy();
			redirect(base_url());
			
		} else{
			$data['order']=$this->wstore_model->get_orderr();
			$this->load->view('index', $data);
		}
	}

	public function orderr()
	{
		$data['order']=$this->wstore_model->get_orderr();
		$this->load->view('order', $data);
	}

	public function confirmr()
	{
		$data['produk']=$this->wstore_model->get_confirmr();
		$this->load->view('confirm', $data);
	}

	public function confirmc()
	{
		$this->load->model('wstore_model');

		$is_submit = $this->input->post('is_submit');

		if(isset($is_submit) && $is_submit == 1){
			
			$data =array(
				'no_order' => $this->input->post('no_order'),
				'totalpembayaran' => $this->input->post('totalpembayaran'),
				'metodepembayaran' => $this->input->post('metodepembayaran'),
				'waktupembayaran' => $this->input->post('waktupembayaran')
				); 
			$this->wstore_model->set_confirm($data);
			redirect(base_url());
			
		} else{
			$data['produk']=$this->wstore_model->get_barang();
			$this->load->view('index', $data);
		}
	}

	public function read()
	{
		$data['produk']=$this->wstore_model->get_barang();
		$this->load->view('tables', $data);
	}

	public function create()
	{
		$this->load->library('upload');
		$this->load->model('wstore_model');

		$is_submit = $this->input->post('is_submit');

		if(isset($is_submit) && $is_submit == 1){
			$fileUpload = array();
			$isUpload = FALSE;

			$config = array(
				'upload_path' => './uploads/',
				'allowed_types' => 'jpg|jpeg|png',
				'max_size' => 512
				);

			$this->upload->initialize($config);

			if($this->upload->do_upload('userfile')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			}

			if($isUpload==TRUE){
				$data =array(
					'namaproduk' => $this->input->post('namaproduk'),
					'fotoproduk' => $fileUpload['file_name'],
					'keteranganproduk' => $this->input->post('keteranganproduk'),
					'jumlahstock' => $this->input->post('jumlahstock'),
					'hargaproduk' => $this->input->post('hargaproduk'),
					'produk_id' => $this->input->post('produk_id')
					); 
				$this->wstore_model->set_barang($data);
				redirect('admin/read');
			}
		} else{
			$this->load->view('forms');
		}
	}
}
