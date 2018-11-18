<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome_model extends CI_Model 
{
    
    public function Login($email, $password)
    {
        $query = $this->db->get('users');
        foreach ($query->result() as $row)
        {
            if($row->email === $email && $row->password === $password) {
                return $row;
            }
        }
        
        return false;
    }

    public function Create($x)
    {
        $this->name 			= $x['name'];
        $this->email 	        = $x['email'];
        $this->password 	    = $x['password'];
        $this->access 		    = $x['access'];
        
        $this->db->insert('users', $this);
    }

    public function Read($x)
    {
        return $this->db->get($x);
    }

    public function Read_single($id)
    {
        $query = $this->db->query("SELECT * FROM `products` WHERE `id` = $id");
        return $query;
    }

    public function Update()
    {

    }

    public function Delete()
    {
        
    }
}