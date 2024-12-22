<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Restaurant Classique</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Georgia', serif;
            background-color: #f7f7f7;
            color: #2c3e50;
        }

        .navbar {
            background-color: #2c3e50;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid #b38b6d;
        }
        .navbar a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 18px;
            margin: 0 20px;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #b38b6d;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .form-container label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-container input[type="submit"] {
            background-color: #b38b6d;
            color: white;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 5px;
            border: 1px solid transparent;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background-color: #8e6b48;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px 0;
            font-size: 16px;
        }
        footer a {
            color: #b38b6d;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
session_start(); 

$host = "localhost";
$user = "root";
$password = "";
$bd = "chef_cuisinier";

$conn = mysqli_connect($host, $user, $password, $bd);
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (isset($_POST['connecter'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE LOWER(email) = LOWER('$email')";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $username = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $username['password'])) {
            $_SESSION['user_id'] = $username['user_id']; 

            if ($username['role_id'] == 1) {
                header("Location: menus_admin.php"); 
                exit();
            } else {
                header("Location: menu_page.php"); 
                exit();
            }
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Email non trouvé.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <a href="#">Restaurant Classique</a>
        </div>
        <div class="buttons">
            <a href="inscreption_page.php">S'inscrire</a>
        </div>
    </div>

    <div class="form-container">
        <h2>Connexion</h2>
        <form action="" method="post">
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Se connecter" name="connecter">
        </form>
    </div>

    <footer>
        <p>© 2024 Restaurant Classique. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>

</body>
</html>

