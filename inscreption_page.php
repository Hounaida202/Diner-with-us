<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Restaurant Classique</title>
    <style>
        /* Général */
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

        /* Navbar */
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

        /* Formulaire d'inscription */
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
        .form-container input[type="text"],
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
        .form-container form select {
            background-color: #b38b6d;
            color: white;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 5px;
            border: 1px solid transparent;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Footer */
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

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="#">Restaurant Classique</a>
        </div>
        <div class="buttons">
            <a href="connexion_page.php">Se connecter</a>
        </div>
    </div>

    <!-- Formulaire d'Inscription -->
    <div class="form-container">
        <h2>Inscrivez-vous</h2>
        <form action="submit_form.html" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <select id="password" name="password" required>
              <option value="option1">admin</option>
              <option value="option2">user</option>
            </select>

            <input type="submit" value="S'inscrire">
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>

</body>
</html>
