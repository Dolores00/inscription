<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:hsl(357, 79.50%, 43.90%);
            background-image: no-repeat;
            background-size: cover;
            max-width: 500px;
            margin: 10px auto;
            padding: 80px;
        }
        body{
            background-image: url(alb.jpg);
        }
       
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
   
        <h1>Connexion</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Passeword:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">login</button>
        </form>
        <?php
        require_once 'config.php';

        session_start();
        $sql = "SELECT * FROM connexion ";
$result = $conn->query($sql);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Vérification des informations de connexion
            if ($username === 'ADMIN' && $password === 'Admin') {
                $_SESSION['loggedin'] = true;
                header('Location: menu.php');
                exit;
            } else {
                echo '<p class="error">Nom d\'utilisateur ou mot de passe incorrect</p>';
            }
        }
        ?>
   
</body>
</html>