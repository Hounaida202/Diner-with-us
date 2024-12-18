<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos Réservations - Restaurant Classique</title>
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
            width: 80%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        /* Carte pour chaque réservation */
        .reservation-card {
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

        /* Boutons d'action */
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

        /* Footer */
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
    <!-- Titre principal -->
    <h1>Vos Réservations</h1>

    <!-- Conteneur principal pour les réservations -->
    <div class="reservations-container">

        <!-- Exemple de carte pour une réservation -->
        <div class="reservation-card">

            <div style="display: flex; justify-content:space-between; gap:20px;">
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
                    <button onclick="modifierReservation()">Changer</button>
                    <button onclick="supprimerReservation()">Supprimer</button>
                </div>
            </div>
            </div>
        </div>
    </div> 
    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique | Tous droits réservés.</p>
    </footer>

    <script>
        // Fonctions JavaScript pour les actions Modifier/Supprimer
        function modifierReservation() {
            alert("Fonction Modifier en cours de développement.");
        }
        
        function supprimerReservation() {
            if (confirm("Voulez-vous vraiment supprimer cette réservation ?")) {
                alert("Réservation supprimée avec succès.");
            }
        }
    </script>
</body>
</html>
