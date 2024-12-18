<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration des Menus</title>
    <style>
        /* Styles généraux */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            background-color: #f9f6f2;
            color: #2c3e50;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 36px;
            color: #8e6b48;
        }

        .menu-container {
            width: 80%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .menu-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            position: relative;
        }

        .menu-card h2 {
            font-size: 24px;
            color: #b38b6d;
            margin-bottom: 10px;
        }

        .menu-card ul {
            list-style: none;
            margin-bottom: 10px;
        }

        .menu-card ul li {
            margin: 5px 0;
            color: #7f8c8d;
            font-size: 14px;
        }

        .menu-card button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #b38b6d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .menu-card button:hover {
            background-color: #8e6b48;
        }

        .add-menu {
            width: 300px;
            padding: 15px;
            text-align: center;
            margin-top: 20px;
            margin-left: 225px;
        }

        .add-menu button {
            background-color: #8e6b48;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .add-menu button:hover {
            background-color: #b38b6d;
        }
        .menu-container {
           
           gap: 20px;
           padding: 20px;
       }

       /* Carte pour chaque catégorie */
       .menu-card {
           background-color: #fff;
           border: 1px solid #ddd;
           border-radius: 10px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           width: 600px;
           height: auto;
           padding: 20px;
           transition: transform 0.3s ease, box-shadow 0.3s ease;
       }

       .menu-card:hover {
           transform: translateY(-10px);
           box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
       }

       .menu-card h2 {
           font-size: 24px;
           color: #b38b6d;
           border-bottom: 2px solid #b38b6d;
           margin-bottom: 10px;
           display: inline-block;
       }

       .menu-item {
           margin: 15px 0;
       }

       .menu-item-name {
           font-weight: bold;
           font-size: 16px;
       }

       .menu-item-description {
           font-size: 14px;
           color: #7f8c8d;
       }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Titre principal -->
    <h1>Gestion des Menus</h1>
    <div class="add-menu">
        <button >Ajouter un nouveau menu</button>
    </div>
    <!-- Conteneur principal pour les menus -->
    <div class="menu-container">
        <!-- Exemple de carte de menu -->


        <div class="menu-container ">
        
        <div class="menu-card">
            <div class="menu-item">
            <h2>Entrée</h2>
                <div class="menu-item-name">Foie Gras Maison</div>
            </div>
            <div class="menu-item">
            <h2>Plat principale</h2>
                <div class="menu-item-name">Filet de Boeuf Rossini</div>
            </div>
            <div class="menu-item">
            <h2>Dessert</h2>
            <div style="display: flex; justify-content:space-between">
                <div>
                <div class="menu-item-name">jus d'orange</div>
                 <p class="menu-item-description ">contient une orange sous forme jus</p>
                </div>
                <img style="height: 150px; border-radius:50px" src="https://fridg-front.s3.amazonaws.com/media/products/jus_orange_25_cl.JPG" alt="">
                </div>
            </div>
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
    </div> 


        <!-- Ajouter d'autres cartes de menus ici -->
    </div>

    <!-- Bouton pour ajouter un menu -->
   

    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique | Tous droits réservés.</p>
    </footer>
</body>
</html>
