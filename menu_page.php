<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Menus</title>
    <link rel="stylesheet" href="style.css">
</head>
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

        .modal {
                     
               position: fixed;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               display: none;
        }
        .modal-content {
            
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            margin: auto;
            margin-top: 100px;
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

        .reserver{
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
        .reserver:hover{
            background-color: #8e6b48;
}
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
<body>

<div class="navbar">
    <div class="logo">
        <a href="#">Diner with us</a>
    </div>
    <div>
        <a class="navbar-choix" href="consulter_reservations.php">Réservations</a>
    </div>
</div>
<h1>Nos Menus</h1>
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'chef_cuisinier';
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
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

if (!$result) {
    die("Erreur dans la requête SQL : " . mysqli_error($conn));
}

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
                echo '<form method="POST" action="">
                        <input type="hidden" name="menu_id" value="' . htmlspecialchars($currentMenuId) . '">
                        <label for="date">Date de réservation :</label>
                        <input type="date" name="date" required>
                        <label for="nombre">Nombre de personnes :</label>
                        <select name="nombre" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <input type="submit" name="reserver" class="reserver" value="Réserver">
                      </form>
                    </div>
                </div>';
            }
            echo '<div class="menu-container">
                    <div class="menu-card">
                        <h1>' . htmlspecialchars($menuName) . '</h1>';

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
                        <img style="height: 150px; border-radius:50px" src="' . htmlspecialchars($picture) . '" alt="">
                    </div>
                  </div>';
        }
    }
    echo '<form method="POST" action="">
            <input type="hidden" name="menu_id" value="' . htmlspecialchars($currentMenuId) . '">
            <label for="date">Date de réservation :</label>
            <input type="date" name="date" required>
            <label for="nombre">Nombre de personnes :</label>
            <select name="nombre" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" name="reserver" class="reserver" value="Réserver">
          </form>
        </div>
    </div>';
} else {
    echo '<p>Aucun menu trouvé.</p>';
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reserver'])) {
    $menuId = isset($_POST['menu_id']) ? intval($_POST['menu_id']) : null;
    $date = isset($_POST['date']) ? trim($_POST['date']) : null;
    $guest = isset($_POST['nombre']) ? intval($_POST['nombre']) : null;

    $userId = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : null;

    if (!$menuId || !$date || !$guest || !$userId) {
        echo "<p>Erreur : 
            " . (!$menuId ? "Menu ID manquant, " : "") . 
            (!$date ? "Date manquante, " : "") . 
            (!$guest ? "Nombre de personnes manquant, " : "") . 
            (!$userId ? "Utilisateur non connecté" : "") . 
            ".</p>";
        exit;
    }
    $insertQuery = "INSERT INTO reservations (date_reservation, nombre_guest, user_id, menu_id) 
                    VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    if (!$stmt) {
        die("Erreur dans la préparation de la requête : " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, 'siii', $date, $guest, $userId, $menuId);
    if (mysqli_stmt_execute($stmt)) {
        echo "<p>Réservation ajoutée avec succès.</p>";
    } else {
        echo "<p>Erreur lors de l'insertion : " . mysqli_error($conn) . "</p>";
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>

<footer>
    <p>© 2024 Restaurant Classique | Tous droits réservés.</p>
</footer>
</body>
</html>




