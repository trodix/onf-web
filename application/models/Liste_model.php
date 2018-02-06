<?php

class Liste_model extends CI_Model {
    private $_table = 'arbre';
    
    function readAll() {
        $this->db->order_by("idArbre", "asc"); 
        // Exécution de la requête
        $query = $this->db->get($this->_table);
        // result() transforme le résultat de la requête en un tableau d'objets       
        return $query->result();
    }
    
}
