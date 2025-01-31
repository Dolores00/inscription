<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer l'utilisateur de la base de données
    $sql = "DELETE FROM etudiants WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur supprimé avec succès";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    // Rediriger vers la page de lecture après suppression
    header('Location: menu.php');
    exit;
} else {
    echo "ID de l'utilisateur non fourni";
}
?>