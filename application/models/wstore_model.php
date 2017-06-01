<?php
class wstore_model extends CI_Model{
public function __construct(){
	$this->load->database();

}
public function set_barang($data){
	return $this->db->insert('produk', $data);
}

public function set_confirm($data){
	return $this->db->insert('confirm', $data);
}

public function set_order($data){
	return $this->db->insert('order', $data);
}

public function set_update($produk_id, $data, $id_barang){
	$this->db->set('jumlahstock', $data);
	$this->db->where('produk_id', $id_barang);
	return $this->db->update('produk');
}

public function set_complain($data){
	return $this->db->insert('complain', $data);
}

public function get_confirmr(){
	$query = $this->db->get('confirm');
	return $query->result_array();
}

public function get_barang(){
	$query = $this->db->get('produk');
	return $query->result_array();
}

public function get_orderr(){
	$query = $this->db->get('order');
	return $query->result_array();
}

public function get_complainr(){
	$query = $this->db->get('complain');
	return $query->result_array();
}

public function newtocart($data){
	$this->db->select('namaproduk, tipeproduk, hargaproduk');
	$this->db->where('produk_id', $data['produk_id']);
	$query = $this->db->get('produk')->result_array();
	foreach ($query as $copy) {
		$masuk = array('user_id' => $data['user_id'],
		'produk_id' => $data['produk_id'],
		'namaproduk' => $copy['namaproduk'],
		'tipeproduk' => $copy['tipeproduk'],
		'jumlahbeli' => $data['jumlahbeli'],
		'hargaproduk' => $copy['hargaproduk']
		);
	return $this->db->insert('cart', $masuk);
	}
}

public function newgallery($produk_id){
	$this->db->select('*');
	$this->db->where('produk_id', $produk_id);
	$hasil = $this->db->get('produk');
	return $hasil->result_array();
}

public function get_cart($user_id){
	$this->db->select('*');
	$this->db->where('user_id', $user_id);
	$query = $this->db->get('cart');
	return $query->result_array();
}

public function deletecart($produk_id){
	$this->db->where('produk_id', $produk_id);
	return $this->db->delete('cart');
}

public function deleteorder($no_order){
	//ngambil dari tabel order dgn no_order ini, trus create baru di history sesuai data yg diambil
	$this->db->select('*');
	$this->db->where('no_order', $no_order);
	$query = $this->db->get('order')->result_array();
	foreach ($query as $copy) {
		$masuk = array('no_order' => $copy['no_order'],
		'namalengkap' => $copy['namadepan']." ".$copy['namabelakang'],
		'alamatlengkap' => $copy['alamat'].", ".$copy['kota'].", ".$copy['kecamatan'].", ".$copy['kelurahan'].", ".$copy['provinsi'].", ".$copy['kodepos'],
		'telfon' => $copy['telfon'],
		'email' => $copy['email'],
		'pesanan' => $copy['pesanan'],
		'totalpembayaran' => $copy['totalpembayaran']
		);
		$this->db->insert('history', $masuk);
	}
	$this->db->where('no_order', $no_order);
	return $this->db->delete('order');
}

public function deletepembayaran($no_order){
	$this->db->select('*');
	$this->db->where('no_order', $no_order);
	$query = $this->db->get('confirm')->result_array();
	foreach ($query as $copy) {
		$masuk = array('no_order' => $copy['no_order'],
		'metodepembayaran' => $copy['metodepembayaran'],
		'waktupembayaran' => $copy['waktupembayaran']
		);
	$this->db->where('no_order', $no_order);
	$this->db->update('history', $masuk);
	}
	$this->db->where('no_order', $no_order);
	return $this->db->delete('confirm');
}

public function getHistory(){
	$query = $this->db->get('history');
	return $query->result_array();
}}
?>