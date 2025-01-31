<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body {
            background-image: url(etudiants.jpg);
            background-image: no-repeat;
            background-size:cover;
           
        }

        table {
            opacity: 0.6;
            border-collapse: collapse;
        }

        td {
            border:1px solid black;
            padding:10px;
            font-weight: bold;
            color: #333;
            background-color; #f0sssf0f0;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
require_once 'config.php';

$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Liste des utilisateurs</h2>
        <a href="Ajouter.php" class="btn btn-info">Ajouter</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>filliere</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['nom']."</td>
                                <td>".$row['prenom']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['filliere']."</td>
                                <td>
                                    <a href='modifier.php?id=".$row['id']."' class='btn btn-warning btn-sm'>Modifier</a>
                                    <a href='supprimer.php?id=".$row['id']."' class='btn btn-danger btn-sm'>Supprimer</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='100'>Aucun utilisateur trouvé</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>