<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations - Administration</title>
    <style>
        /* Styles généraux */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Georgia', serif;
            background-color: #f9f6f2;
            color: #2c3e50;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 36px;
            color: #8e6b48;
        }

        .reservation-container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .reservation-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .reservation-card h2 {
            font-size: 20px;
            color: #b38b6d;
            margin-bottom: 10px;
        }

        .reservation-info {
            margin-bottom: 15px;
        }

        .reservation-info strong {
            color: #2c3e50;
        }

        .reservation-card button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-accept {
            background-color: #8e6b48;
            color: white;
        }

        .btn-accept:hover {
            background-color: #b38b6d;
        }

        .btn-decline {
            background-color: #c0392b;
            color: white;
        }

        .btn-decline:hover {
            background-color: #e74c3c;
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
    <h1>Réservations des Menus</h1>

    <!-- Conteneur principal pour les réservations -->
    <div class="reservation-container">
        <!-- Exemple de carte de réservation -->
        <div class="reservation-card">
            <h2>Réservation #1</h2>
            <div class="reservation-info">
                <p><strong>Nom :</strong> Ahmed Sari</p>
                <p><strong>Menu réservé :</strong> Menu Italien</p>
                <p><strong>Date :</strong> 2024-12-20</p>
            </div>
            <button class="btn-accept">Accepter</button>
            <button class="btn-decline">Refuser</button>
        </div>

        <!-- Ajouter d'autres cartes de réservations ici -->
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique | Tous droits réservés.</p>
    </footer>
</body>
</html>
