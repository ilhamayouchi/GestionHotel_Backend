<?php
session_start();
require_once 'config/db.php';
require_once 'models/Client.php';
require_once 'controllers/ClientController.php';

// Configuration des erreurs
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Vérification de la connexion DB
if (!isset($pdo)) {
    die("Erreur: La connexion à la base de données n'a pas été établie.");
}

// Initialisation MVC
$model = new Client($pdo);
$controller = new ClientController($model);

// Gestion des actions
$action = $_GET['action'] ?? $_POST['action'] ?? 'show_login';

// Traitement des actions
switch ($action) {
    case 'show_login':
        require 'views/connexion.php';
        break;
        
    case 'show_register':
        require 'views/inscription.php';
        break;
        
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                try {
                    $email = $_POST['email'] ?? '';
                    $password = $_POST['mot_de_passe'] ?? '';
                    
                    if (empty($email) || empty($password)) {
                        throw new Exception("Tous les champs sont obligatoires");
                    }
                    
                    if ($controller->login($email, $password)) {
                        // Connexion réussie - redirection vers l'accueil
                        header("Location: accueil.php");
                        exit;
                    }
                } catch (Exception $e) {
                    if (str_contains($e->getMessage(), "non enregistré")) {
                        // Redirection vers l'inscription si compte inexistant
                        $_SESSION['flash_info'] = $e->getMessage();
                        header("Location: index.php?action=show_register");
                        exit;
                    } else {
                        // Autre erreur - reste sur la page de connexion
                        $_SESSION['flash_error'] = $e->getMessage();
                        header("Location: index.php?action=show_login");
                        exit;
                    }
                }
            }
            break;
        
    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $required = ['prenom', 'nom', 'email', 'telephone', 'mot_de_passe'];
                $missing = array_diff($required, array_keys($_POST));
                
                if (!empty($missing)) {
                    throw new Exception("Champs manquants: " . implode(', ', $missing));
                }
                
                $message = $controller->register($_POST);
                $_SESSION['flash_success'] = $message;
            } catch (Exception $e) {
                $_SESSION['flash_error'] = $e->getMessage();
            }
        }
        header("Location: index.php?action=show_login");
        exit;
        
    default:
        header("Location: index.php?action=show_login");
        exit;
}