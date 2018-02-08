<?php

class Liste_model extends CI_Model {
    private $_table = 'arbre';
    
    function readAll() {
        $this->db->order_by("idArbre", "asc"); 
        // Exécution de la requête
        $query = $this->db->from('arbre')
                          ->join('espece', 'espece.idEspece = arbre.idEspece')
                          ->join('genre', 'genre.idGenre = espece.idGenre')
                          ->get();
        // result() transforme le résultat de la requête en un tableau d'objets       
        return $query->result();
    }

    // function read($id) {

    //      $query = $this->db->from('arbre')
    //                       ->join('espece', 'espece.idEspece = arbre.idEspece')
    //                       ->join('genre', 'genre.idGenre = espece.idGenre')
    //                       ->join('intervention', 'intervention.idArbre = arbre.idArbre')
    //                       ->join('typeIntervention', 'typeIntervention.idType = intervention.idType')
    //                       ->where('arbre.idArbre', $id)
    //                       ->get();
               
    //     return $query->row();
    // }

    function readArbre($id) {

         $query = $this->db->from('arbre')
                          ->join('espece', 'espece.idEspece = arbre.idEspece')
                          ->join('genre', 'genre.idGenre = espece.idGenre')
                          ->where('arbre.idArbre', $id)
                          ->get();
               
        return $query->row();
    }

    function readLesInterventions($id) {

         $query = $this->db->from('intervention')
                          ->join('arbre', 'intervention.idArbre = arbre.idArbre')
                          ->join('typeIntervention', 'typeIntervention.idType = intervention.idType')
                          ->where('intervention.idArbre', $id)
                          ->get();
               
        return $query->result();
    }

    function readLesGenres() {
        $query = $this->db->query("
            SELECT genre.libelleGenre, count(*) as qteArbreGenre FROM arbre
            inner join espece on espece.idEspece = arbre.idEspece
            inner join genre on genre.idGenre = espece.idGenre
            group by genre.libelleGenre;"
        );

        return $query->result();
    }

    function readLesEspeces() {
        $query = $this->db->query("
            SELECT espece.libelleEspece, count(*) as qteArbreEspece FROM arbre
            inner join espece on espece.idEspece = arbre.idEspece
            group by espece.libelleEspece;"
        );

        return $query->result();
    }

    function readLesCommunes() {
        $query = $this->db->query('
            SELECT commune, count(*) as qteArbreCommune FROM arbre
            group by commune;'
        );

        return $query->result();
    }

    function readUneObservation($idArbre, $idIntervention){
        $query = $this->db->query("
            select observations from intervention 
            right join arbre on intervention.idArbre = arbre.idArbre
            where arbre.idArbre = $idArbre and intervention.idIntervention = $idIntervention"
        );
        
        return $query->row();
    }

    function readLesInterventionsArbre($idArbre) {
        $query = $this->db->query("
            select libelleType, count(*) as qteArbreTypeIntervention
            from typeintervention
            inner join intervention on typeintervention.idType = intervention.idType
            inner join arbre on arbre.idArbre = intervention.idArbre
            where arbre.idArbre = $idArbre
            group by typeintervention.libelleType"
        );

        return $query->result();
    }   
}
