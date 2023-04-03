<?php
class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
        
    }


    




// récupère tous les enregistrements de la table "utilisateurs" de la base de données et les retourne sous forme d'objet résultat
    public function getUtilisateurs() {
        $query = $this->db->get('utilisateurs');
        return $query->result();
    }

// permet de vérifier les informations dans la base de donnée
        public function login($email, $password) {
            $this->db->select('email, password');
            $this->db->where('email', $email);
            $this->db->where('password', sha1($password));
            $query = $this->db->get('utilisateurs');

            if ($query->num_rows() == 1) {
                return $query->row();
            } else {
                return false;
            }
        }

        

// permet d'inserer les données saisie par l'utilisateur dans registre
    public function ajouterUtilisateur($nom, $prenom, $email, $password) {
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('utilisateurs', $data);
    }

    // Suppression utilisateur avec son ID
    public function supprimerUtilisateur($id){
    $this->db->where('id', $id);
    $this->db->delete('utilisateurs');
    }


    // Obtenir informations utilisateur et le modifier
    public function obtenir($id) {
        $query = $this->db->get_where('utilisateurs', array('id' => $id));
        return $query->row();
    }

    public function modifier($id) {
        $data = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email')
        );
        
        $this->db->where('id', $id);
        $this->db->update('utilisateurs', $data);
        
        // Ajouter un message de débogage pour vérifier que la requête de mise à jour est correcte
        echo $this->db->last_query();
        
        // vérifier si la mise à jour a réussi ou non
        if ($this->db->affected_rows() > 0) {
            // Ajouter un message de débogage pour confirmer que la mise à jour a réussi
            echo 'Modification réussie !';
            return true;
        } else {
            // Ajouter un message de débogage pour confirmer que la mise à jour a échoué
            echo 'La modification a échoué !';
            return false;
        }
    }
    

    

}

   
