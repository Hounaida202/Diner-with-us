<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
.menu-item {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
    }

    .menu-item h3 {
        margin-top: 0;
    }

    .menu-item label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .menu-item input,
    .menu-item textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .menu-item textarea {
        resize: vertical;
        height: 60px;
    }
    form button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
<body>
<div class="navbar">
        <div class="logo">
        Diner with us
        </div>
        <div>
                <a class="navbar-choix" href="reservations_admin.php">Gestion des Réservations</a>
                <a class="navbar-choix" href="statistiques.php">Statistiques</a>
        </div>
    </div> 
    <div id="reservationModal" class="modal">
        <div class="modal-content">
             <h2>Nouveau menu</h2>

             <form id="menu-form" style="max-width:600px; margin: 0 auto;">
                <div class="menu-item">
                    <label for="nom-menu">Nom du menu:</label>
                    <input type="text" id="nom-menu" name="nom-menu" required>
                </div>
                <div id="menu-items-container">
                </div>
                <button type="button" id="new-dish" style="margin-top: 20px;">Ajouter un plat</button>
                <button type="submit" style="margin-top: 20px;">Sauvegarder</button>
            </form>
        </div>
        
    </div>
<script>
        const menuItemsContainer = document.getElementById("menu-items-container");
        const addDishButton = document.getElementById("new-dish");

        let dishCount = 1; 

        function ajouterUnPlat() {
            dishCount++;
            const newDishHTML = `
                <div class="menu-item" >
                    <div class="delete-btn" style="display:flex;justify-content:end;cursor:pointer;">
                       &times;
                    </div>
                    <div>
                    <label for="type-plat-${dishCount}">Type du plat:</label>
                    <input type="text" id="type-plat-${dishCount}" name="type-plat-${dishCount}" required>

                    <label for="nom-plat-${dishCount}">Nom du plat:</label>
                    <input type="text" id="nom-plat-${dishCount}" name="nom-plat-${dishCount}" required>

                    <label for="description-plat-${dishCount}">Description:</label>
                    <textarea id="description-plat-${dishCount}" name="description-plat-${dishCount}" required></textarea>
                    </div>
                </div>`;
            
            menuItemsContainer.innerHTML += newDishHTML;
            attachDeleteEvent();
        }
        function attachDeleteEvent() {
            const deleteButtons = document.querySelectorAll(".delete-btn");
            deleteButtons.forEach(btn => {
                btn.onclick = function () {
                    this.parentElement.remove();
                };
            });
        }

        addDishButton.addEventListener("click", ajouterUnPlat);
        attachDeleteEvent();

    </script>
</body>
</html>