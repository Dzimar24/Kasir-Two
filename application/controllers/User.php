<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data', $data);
	}

    public function add()
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]' ,
            array('matches' => ' %s Salah Bos ')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s Masih Kopong, Silahkan Isi Dulu');
        $this->form_validation->set_message('min_length', '{field} Minimal Minimal 5 Karakter ');
        $this->form_validation->set_message('is_unique', '{field} Ganti Bang, Sudah Ada yang Punya ');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Disimpan');</script>";
            }
            echo "<script>window.location='".site_url('user')."';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]' ,
                array('matches' => ' %s Salah Bos ')
            );
        }
        if($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]' ,
                array('matches' => ' %s Salah Bos ')
            );
        }
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s Masih Kopong, Silahkan Isi Dulu');
        $this->form_validation->set_message('min_length', '{field} Minimal Minimal 5 Karakter ');
        $this->form_validation->set_message('is_unique', '{field} Ganti Bang, Sudah Ada yang Punya ');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if($query->num_rows() > 0){
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script>alert('Data Tidak Ditemukan ');";
                echo "window.location='".site_url('user')."';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Disimpan');</script>";
            }
            echo "<script>window.location='".site_url('user')."';</script>";
        }
    }
    function username_check() {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '[user_id]'");
        if($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} Sudah ADa Yang Punya silahkan Cari Yang lain ');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='".site_url('user')."';</script>";
    }
}
