<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $filliere = $_POST['filliere'];
   

    $sql = "INSERT INTO etudiants(nom, prenom, email,filliere) VALUES ('$nom', '$prenom', '$email','$filliere')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel enregistrement créé avec succès";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>

body {
            
    font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: no-repeat;
            background-size: cover;
            max-width: 500px;
            margin: 10px auto;
            padding: 80px;
            border radius:5px
       
        }
        body{
            background-image: url(ab.jpg);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter un utilisateur</h2>
        <form action="Ajouter.php" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
                
                <div class="form-group">
                <label for="filliere">filliere:</label>
                <input type="text" class="form-control" id="filliere" name="filliere" required>
                
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="menu.php" class="btn btn-info">voir</a>
        </form>
    </div>
</body>
</html>