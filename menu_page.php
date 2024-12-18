<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restaurant Classique</title>
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
           /* Modale */
           .modal {
                     
               position: fixed;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               align-items: center;
               /* display: none; */
        }
        .modal-content {
            
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .modal-content h2 {
            color: #b38b6d;
            margin-bottom: 10px;
            text-align: center;
        }
        .modal-content label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        .modal-content input, .modal-content select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Georgia', serif;
        }
        .modal-content button {
            width: 100%;
            padding: 10px;
            background-color: #b38b6d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .modal-content button:hover {
            background-color: #8e6b48;
        }

        #reserver{
            background-color:#b38b6d;
            margin-top:10px;
            margin-left:450px;
            border:none;
            height:40px; 
            width:80px; 
            border-radius:10px; 
            color:white;
            cursor: pointer;

        }
        #reserver:hover{
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
        .modal-background{
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        
           }
           
    </style>
</head>
<body>
<?php


?>
    <!-- Titre principal -->
    <h1>Nos Menus</h1>

    <!-- Conteneur principal pour les cartes -->
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
            <input type="submit" id="reserver" value="reserver">
        </div>
    </div> 

    <div id="reservationModal" class="modal">
        <div class="modal-content">
            <h2>Nouvelle Réservation</h2>
            <form>
                <label for="nom">Votre Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

                <label for="nombre">Nombre de personnes :</label>
                <select id="nombre" name="nombre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>

                <label for="date">Date de réservation :</label>
                <input type="date" id="date" name="date" required>

                <button type="submit">Réserver</button>
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
