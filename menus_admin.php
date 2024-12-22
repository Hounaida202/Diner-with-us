<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration des Menus</title>
    <link rel="stylesheet" href="style.css">
    <style>
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
        .a{       
        background-color: #b38b6d; 
        padding: 12px 25px;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
        transition: background-color 0.3s;
        border: 1px solid transparent;}
    </style>
</head>
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
    <h1>Gestion des Menus</h1>
    <div class="add-menu">
        <a class="a" href="add_Menu.php">Ajouter un nouveau menu</a>
    </div>
<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "chef_cuisinier";

$conn = mysqli_connect($host, $user, $password, $bd);
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$query = "
    SELECT 
        menus.menu_id,
        menus.menu_name,
        plats.plat_type,
        plats.plat_name,
        plats.picture,
        plats.composants
    FROM 
        menus
    LEFT JOIN 
        plats
    ON 
        menus.menu_id = plats.menu_id
    ORDER BY 
        menus.menu_id, 
        plats.plat_type;
";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $currentMenuId = null;

    while ($row = mysqli_fetch_assoc($result)) {
        $menuId = $row['menu_id'];
        $menuName = $row['menu_name'];
        $platType = $row['plat_type'];
        $platName = $row['plat_name'];
        $composants = $row['composants'];
        $picture = $row['picture'];

        if ($menuId !== $currentMenuId) {
            if ($currentMenuId !== null) {
                echo '</div>'; 
                echo '<div style="margin-top: 10px;">
                        <button onclick="modifierMenu(' . $currentMenuId . ')">Modifier</button>
                        <button onclick="supprimerMenu(' . $currentMenuId . ')">Supprimer</button>
                      </div>
                    </div>'; 
            }

            echo '<div class="menu-container">
                    <div class="menu-card">
                        <h1>' . htmlspecialchars($menuName) . '</h1>
                        <div class="menu-items">';
            $currentMenuId = $menuId;
        }

        if (!empty($platName)) {
            echo '<div class="menu-item">
                    <h2>' . htmlspecialchars($platType) . '</h2>
                    <div style="display: flex; justify-content: space-between">
                        <div>
                            <div class="menu-item-name">' . htmlspecialchars($platName) . '</div>
                            <p class="menu-item-description">' . htmlspecialchars($composants) . '</p>
                        </div>
                        <img style="height: 150px; border-radius:50px" src="' . htmlspecialchars($picture) . '" alt="Image du plat">
                    </div>
                  </div>';
        }
    }

    echo '</div>'; 
    echo '<div style="margin-top: 10px;">
            <button onclick="modifierMenu(' . $currentMenuId . ')">Modifier</button>
            <button onclick="supprimerMenu(' . $currentMenuId . ')">Supprimer</button>
          </div>
        </div>'; 
} else {
    echo '<p>Aucun menu trouvé.</p>';
}

mysqli_close($conn);
?>

</body>
</html>
