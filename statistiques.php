<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - Chef</title>
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

        .stats-container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .stat-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .stat-card h2 {
            font-size: 20px;
            color: #b38b6d;
            margin-bottom: 10px;
        }

        .stat-card p {
            font-size: 16px;
            color: #7f8c8d;
            margin: 5px 0;
        }

        .highlight {
            font-weight: bold;
            color: #8e6b48;
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
    <h1>Statistiques du Chef</h1>

    <!-- Conteneur principal pour les statistiques -->
    <div class="stats-container">
        <!-- Carte pour les demandes en attente -->
        <div class="stat-card">
            <h2>Demandes en attente</h2>
            <p>Nombre de demandes en attente : <span class="highlight">12</span></p>
        </div>

        <!-- Carte pour les demandes approuvées aujourd'hui -->
        <div class="stat-card">
            <h2>Demandes approuvées pour aujourd'hui</h2>
            <p>Nombre de demandes approuvées : <span class="highlight">8</span></p>
        </div>

        <!-- Carte pour les demandes approuvées demain -->
        <div class="stat-card">
            <h2>Demandes approuvées pour demain</h2>
            <p>Nombre de demandes approuvées : <span class="highlight">5</span></p>
        </div>

        <!-- Carte pour le prochain client -->
        <div class="stat-card">
            <h2>Détails du prochain client</h2>
            <p><strong>Nom :</strong> Ahmed Sari</p>
            <p><strong>Menu :</strong> Menu Italien</p>
            <p><strong>Date :</strong> 2024-12-20</p>
        </div>

        <!-- Carte pour le nombre de clients inscrits -->
        <div class="stat-card">
            <h2>Nombre total de clients inscrits</h2>
            <p>Nombre de clients : <span class="highlight">120</span></p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Restaurant Classique | Tous droits réservés.</p>
    </footer>
</body>
</html>
