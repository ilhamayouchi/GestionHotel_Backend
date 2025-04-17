<?php

class ClientController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function register($data) {
        // Validation supplémentaire
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return "Email invalide";
        }
    
        if (strlen($data['mot_de_passe']) < 8) {
            return "Le mot de passe doit contenir au moins 8 caractères";
        }
    
        $existing = $this->model->findByEmail($data['email']);
        if ($existing) {
            return "Cet utilisateur existe déjà.";
        }
    
        // Hash du mot de passe
        $data['mot_de_passe'] = password_hash($data['mot_de_passe'], PASSWORD_DEFAULT);
    
        if ($this->model->create($data)) {
            return "Inscription réussie !";
        } else {
            return "Erreur lors de l'inscription";
        }
    }

    public function login($email, $password) {
        $user = $this->model->findByEmail($email);
        
        if (!$user) {
            // Utilisateur non trouvé
            throw new Exception("Email non enregistré. Veuillez vous inscrire.");
        }
        
        if (!password_verify($password, $user['mot_de_passe'])) {
            // Mot de passe incorrect
            throw new Exception("Mot de passe incorrect");
        }
        
        // Connexion réussie
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'prenom' => $user['prenom'],
            'nom' => $user['nom']
        ];
        
        return true;
    }
}
