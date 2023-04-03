<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->library('session');
        
    }

    //rediriger vers dashboard et vérification 
    public function dashboard() {
        //Verifier l'utilisateur
         if (!$this->session->userdata('logged_in') || !$this->session->userdata('user_id')) {
             redirect('user/dashboard');


        // charge la vue
        $this->load->view('dashboard/dashboardView');
    }
    
    }
    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/loginView');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->UserModel->login($email, $password);

            if ($user) {
                 $user_data = array(
                     'user_id' => $user->id,
                     'email' => $user->email,
                     'logged_in' => true
                 );

                 $this->session->set_userdata($user_data);

                 redirect('dashboard/dashboard');
            } else {
                 $this->session->set_flashdata('error', 'Invalid username or password');
                 redirect('user/login');
             }
            }  
    }

    

    // public function logout() {
    //     $this->session->unset_userdata('user_id');
    //     $this->session->unset_userdata('username');
    //     $this->session->unset_userdata('email');
    //     $this->session->unset_userdata('logged_in');

    //     redirect('user/login');
    // }




    

    
    //Ajouter utilisateur
    public function ajouterUtilisateur() {
        //Recupere les valeurs saisies
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //Pour hasher le mot de passe
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Créer un tableau de données avec les valeurs du formulaire
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $hashPassword // Le mot de passe est stocké sous forme de hachage
        );

    
        $result = $this->db->insert('utilisateurs', $data); // Ajouter l'utilisateur à la base de données

        if ($result) {
            redirect(base_url('user/listeUtilisateur')); // Rediriger vers la page de liste des utilisateurs
        }
        
    }
    
    // Récupérer et afficher la liste des utilisateurs enregistrés
    public function registre() {
        // Récupère tous les utilisateurs de la base de données
        $result = $this->UserModel->getUtilisateurs();
        // Initialise la variable de succès à false
        $success = false;
    
        // Charger la bibliothèque de validation de formulaire
        $this->load->library('form_validation');
    
        // Définir les règles de validation pour les champs de formulaire
        $this->form_validation->set_rules('password', 'Mot de passe', 'required|min_length[8]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/]');
        $this->form_validation->set_rules('confirm_password', 'Confirmation du mot de passe', 'required|matches[password]');

        
        // Vérifier si le formulaire a été soumis et validé
        if ($this->input->post() && $this->form_validation->run()) {
            $success = $this->UserModel->ajouterUtilisateur();
            if ($success) {
                $this->session->set_flashdata('success_message', 'Inscription réussie !');
                redirect(base_url('user/registre'));
            }
        }
    
        $this->load->view('auth/RegistreView', ['result' => $result, 'success' => $success]);
    }
    


    //Affiche liste utilisateur
    public function listeUtilisateur() {
        $data['utilisateurs'] = $this->UserModel->getUtilisateurs(); // Récupérer la liste des utilisateurs
        $success = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->UserModel->ajouterUtilisateur();//la méthode ajouterUtilisateur() du modèle UserModel pour ajouter un nouvel utilisateur
            if ($result) {
                $success = true;//inscription avec succes
            }
        }
        $data['success'] = $success; //pour savoir si l'ajout d'un utilisateur a été effectué avec succès ou non
        $this->load->view('dashboard/ListViewUtilisateur', $data); //transmis à la vue 'dashboard/ListViewUtilisateur' pour afficher un message de succès
    } 

   
    //Suppression utilisateur avec son ID
    public function supprimer($id)
    {
    $this->load->model('UserModel');
    $this->UserModel->supprimerUtilisateur($id);
    redirect('user/listeUtilisateur');
    }

    

    // Modifier informations de l'utilisateur
    public function modifier($id) {
        $this->load->model('UserModel');
        $utilisateur = $this->UserModel->obtenir($id);
        
        if (!$utilisateur) {
            show_404();
        }
        

        
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() === FALSE) {
            $data['utilisateur'] = $utilisateur;
            $this->load->view('dashboard/ModifierViewUtilisateur', $data);
        } else {
            $success = $this->UserModel->modifier($id);
            
            
            
            // Ajouter un message de confirmation pour confirmer que la modification a été effectuée avec succès
            $this->session->set_flashdata('success', 'L\'utilisateur a été modifié avec succès.');
            
            redirect('user/listeUtilisateur');
        }
    }
    
    
    
    
}  
