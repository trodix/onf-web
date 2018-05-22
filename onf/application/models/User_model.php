<?php

Class User_model extends CI_Model{

    public function register($userData){
        $lastid = -1;
        if(!is_null($userData)){
            $query = $this->db->insert('user', $userData);
            if($query)
            {
                $lastid = $this->db->insert_id();
                $RegistredUser = $this->db->query("SELECT * FROM user WHERE id = $lastid")->result();
                    
            }else {
                $error = $this->db->error();
                return false;
            }

        }
        return $RegistredUser;
    }

    public function login($userData){
        if(!is_null($userData)){
            $email = $userData['email'];
            $password_crypt = $userData['password'];
            $query = $this->db->query("
                SELECT user.username, user.email, user.privilege
                FROM user
                WHERE user.email like '$email' AND user.password like '$password_crypt';"
            );
            return $query->num_rows() > 0 ? $query->result() : false;
            //return $query->result();
        }
        return false;
    }
}