
<?php
$host = 'localhost';  // Ou '127.0.0.1' si localhost pose problème
$dbname = 'hotel_db'; // Nom exact de votre base
$username = 'root';   // Utilisateur par défaut XAMPP
$password = '';       // Mot de passe par défaut XAMPP (vide)

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("ERREUR CONNEXION DB: " . $e->getMessage());
}