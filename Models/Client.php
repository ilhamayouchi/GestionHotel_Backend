<?php

class Client {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function findByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO clients (prenom, nom, email, telephone, mot_de_passe) 
                                        VALUES (:prenom, :nom, :email, :telephone, :mot_de_passe)");
            return $stmt->execute([
                ':prenom' => $data['prenom'],
                ':nom' => $data['nom'],
                ':email' => $data['email'],
                ':telephone' => $data['telephone'],
                ':mot_de_passe' => $data['mot_de_passe']
            ]);
        } catch (PDOException $e) {
            error_log("Erreur création client: " . $e->getMessage());
            return false;
        }
    }
}
