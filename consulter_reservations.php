<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos Réservations - Restaurant Classique</title>
    <link rel="stylesheet" href="style.css">

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

        /* Conteneur principal */
        .reservations-container {
            position: relative;

            width: 80%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .reservation-card {
            position: relative;

            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .reservation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .reservation-details h3 {
            font-size: 20px;
            color: #b38b6d;
        }

        .reservation-details p {
            font-size: 14px;
            color: #7f8c8d;
        }

        .action-buttons button {
            background-color: #b38b6d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #8e6b48;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
        .menu-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 600px;
            height: auto;
            padding: 20px;
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

    </style>
</head>
<body>
<div class="navbar">
        <div class="logo">
            <a href="#">Diner with us</a>
        </div>
        <div>
                <a class="navbar-choix" href="menu_page.php">Menus</a>
        </div>
    </div>
    <h1>Vos Réservations</h1>

    <div class="reservations-container">

        <div class="reservation-card">

            <div style="display: flex; justify-content:space-between; gap:20px;">
            <div class="menu-card">
                <h1>Vegetarian</h1>
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
                 <p style="color: black;">contient une orange sous forme jus</p>
                </div>
                <img style="height: 150px; border-radius:50px" src="https://fridg-front.s3.amazonaws.com/media/products/jus_orange_25_cl.JPG" alt="">
                </div>
            </div>
        </div>
            <div class="reservation-details" style="display: flex; flex-direction:column; gap:20px;">
            <h3>Informations de la reservation:</h3>
                <p>Date : 27 Juin 2024 | Heure : 20h00</p>
                <p>Nombre de personnes : 2</p>
                <p>Menu choisi : Menu Végétarien</p>
                <div class="action-buttons">
                    <button id="reserver">Changer</button>
                    <button >Supprimer</button>
                </div>
            </div>
            </div>
        </div>
    </div> 
    <div id="reservationModal" class="modal" style="display: none;">
        <div class="modal-content">
            <h2>Nouvelle Réservation</h2>
            <form method="POST">
                <label for="nom">Votre Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

                <label for="nombre">Nombre de personnes :</label>
                <select id="nombre" name="nombre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <label for="date">Date de réservation :</label>
                <input type="date" id="date" name="date" required>

                <button type="submit">Sauvegarder</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique | Tous droits réservés.</p>
    </footer>

    <script>
    let reserver=document.getElementById("reserver");
    let modal=document.querySelector(".modal");
    reserver.addEventListener("click",function(){
    modal.style.display="block";
    modal.classList.add("modal-background");
    });
</script>
</body>
</html>
