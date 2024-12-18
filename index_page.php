<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant en ligne</title>
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
            border-bottom: 2px solid #b38b6d; /* Légère bordure dorée */
        }
        .navbar a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 18px;
            margin: 0 20px;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #b38b6d; /* Couleur or lors du survol */
        }
        .navbar .buttons a {
            background-color: #b38b6d; /* Doré élégant */
            padding: 12px 25px;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s;
            border: 1px solid transparent;
        }
        .navbar .buttons a:hover {
            background-color: #8e6b48; /* Doré plus foncé au survol */
            border: 1px solid #b38b6d;
        }

        /* Hero Section */
        /* .hero {
            background-image: url('https://via.placeholder.com/1600x600');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px;
        } */
        .hero h1 {
            font-size: 55px;
            margin-bottom: 15px;
        }
        .hero p {
            font-size: 22px;
            font-weight: 300;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 16px;
        }
        footer a {
            color: #b38b6d;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        /* .hero {
        background-image: url('votre-image-de-fond.jpg'); /* Remplacez par votre image */
        /* background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 150px 20px;
        position: relative;
    } */ 
    /* .hero:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4); /* Fond sombre semi-transparent pour lisibilité */
        /* z-index: 1;
    } */ 
    /* .hero-content {
        position: relative;
        margin: 0 auto;
    } */
    .hero h1 {
        font-size: 60px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #f7f7f7;
    }
    .hero p {
        font-size: 20px;
        margin-bottom: 30px;
        font-weight: 300;
    }
    .btn {
        background-color: #b38b6d; 
        padding: 12px 30px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease;
        border: 1px solid transparent;
    }
    .btn:hover {
        background-color: #8e6b48; /* Doré plus foncé au survol */
        border: 1px solid #b38b6d;
    }
    .hero{
        background-color: #2C2F36;
    }
</style>
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="#">Diner with us</a>
        </div>
        <div class="buttons">
            <a href="inscreption_page.php">S'inscrire</a>
            <a href="connexion_page.php">Se connecter</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero" >
    <div class="hero-content" style="display: flex; justify-content:space-between">
        <div>
            <img style="height: 550px;" src="" alt="">
        </div>
        <div style="padding-left: 40px; padding-top: 100px;">
            <h1>L'art de la cuisine classique, revisité</h1>
            <p style="color:white">Venez savourer une expérience culinaire d'exception dans un cadre raffiné et intime.</p>
            <a href="connexion_page.php" class="btn">Réservez une table</a>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>

</body>
</html>


