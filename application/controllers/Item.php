<?php defined('BASEPATH') OR exit('No direct script access allowed');

class item extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['item_m', 'category_m', 'unit_m']);
    }

	public function index()
	{
		$data['row'] = $this->item_m->get();
		$this->template->load('template', 'product/item/item_data', $data);
	}

	public function add() 
	{
		$item = new stdClass();
		$item->item_id = null;
		$item->barcode = null;
		$item->name = null;
		$item->price = null;
		$item->category_id = null;

        $query_category = $this->category_m->get();
        
        $query_unit = $this->unit_m->get();
        $unit[null] = '- Pilih -';
        foreach($query_unit->result() as $unt) {
            $unit[$unt->unit_id] = $unt->name;
        }

		$data = array(
			'page' => 'add',
			'row' => $item,
            'category' => $query_category,
            'unit' => $unit, 'selectedunit' => null,
		);
		$this->template->load('template', 'product/item/item_form', $data);
	}

	public function edit($id) 
	{
		$query = $this->item_m->get($id);
		if($query->num_rows() > 0) {
			$item = $query->row();
			$query_category = $this->category_m->get();
            
            $query_unit = $this->unit_m->get();
            $unit[null] = '- Pilih -';
            foreach($query_unit->result() as $unt) {
                $unit[$unt->unit_id] = $unt->name;
            }

            $data = array(
                'page' => 'edit',
                'row' => $item,
                'category' => $query_category,
                'unit' => $unit, 'selectedunit' => $item->unit_id,
            );
            $this->template->load('template', 'product/item/item_form', $data);
		} else {
			echo "<script>alert('Data Tidak Ditemukan ');";
            echo "window.location='".site_url('item')."';</script>";
		}
	}
	
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            if($this->item_m->check_barcode($post['barcode'])->num_rows() > 0) {
                echo "<script>alert('Data Error atau Sudah Ada Barcode yang Terpakai');</script>";
                redirect('item/add');
            } else {
				$config['upload_path']    = './uploads/product/';
                $config['allowed_types']  = 'gif|jpg|png|jpeg';
                $config['max_size']       = 2048;
                $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
				$this->load->library('upload', $config);


				if(@$_FILES['image']['name'] != null) {
					if ($this->upload->do_upload('image')) {
						$post['image'] = $this->upload->data('file_name');
						$this->item_m->add($post);
						if($this->db->affected_rows() > 0) {
							echo "<script>alert('Data Berhasil Di Simpan');</script>";
						}
						echo "<script>window.location='".site_url('item')."';</script>";
					} else {
						echo "<script>alert('Data Error ');</script>";
						echo "<script>window.location='".site_url('item/add')."';</script>";
					}

				} else {
					$post['image'] = null;
					$this->item_m->add($post);
					if($this->db->affected_rows() > 0) {
						echo "<script>alert('Data Berhasil Di Simpan');</script>";
					}
					echo "<script>window.location='".site_url('item')."';</script>";
				}
            }
		} else if(isset($_POST['edit'])){
			$this->item_m->edit($post);
		}

	}

	public function del($id)
	{
		$this->item_m->del($id);
		if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        redirect('item');
	}
}