<?php

class M_login extends CI_Model {

    Public function proses_login_farrel()
    {
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
                $sess = array(
                    'id_user' =>$row->id_user,
                    'username' =>$row->username,
                    'password' =>$row->password
                );
                $this->session->set_userdata($sess);
            }
            redirect('dashboard_farrel');
        }

    }
}
