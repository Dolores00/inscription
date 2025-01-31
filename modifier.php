<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $filliere = $_POST['filliere'];
   
    $sql = "UPDATE etudiants SET nom='$nom', prenom='$prenom', email='$email', filliere='$filliere', WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header('Location: menu.php');
        
        exit;
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM etudiants WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Utilisateur non trouvé";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>
    <link rel="stylesheet" href="bootstrap.min.css">

    <style>
            body {
            background-image: url(Design.jpg);
            background-image: no-repeat;
            background-size:cover;
            border radius: 5px;
           
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Modifier un utilisateur</h2>
        <form action="modifier.php" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" 
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" 
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" 
            </div>
            <div class="form-group">
                <label for="filliere">filliere:</label>
                <input type="text" class="form-control" id="filliere" name="filliere" 
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>