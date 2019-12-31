<?php 

class Model_login extends CI_Model {

    function cek_login($tabel,$where,$email,$pass)
    {
        $email = htmlspecialchars($email);
        $pass = md5($pass);
        $query= $this->db->select('*')
                ->from($tabel)->where($where,$email)
                ->where('password', $pass)
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_object();
        } else {
            return false;
        }
        
    }

}
?>