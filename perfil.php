<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$full_name = $_SESSION['full_name'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Infinity Tech - Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h2 {
            color: #333;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .grid a {
            display: block;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            transition: background-color 0.3s;
        }

        .grid a:hover {
            background-color: #e0e0e0;
        }

        .grid a i {
            font-size: 36px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
<header>
    <nav class="navigation">
        <a href="#" class="logo">Infi<span>ni</span>ty<span>te</span>ch</a>
        <div class="nav">
            <a href="#" onclick="toggleCart()"><i class='bx bx-cart-alt'> Carrinho</i></a>
        </div>
        <ul class="nav-menu">
            <li class="nav-item"><a href="#">Inicio</a></li>
            <li class="nav-item"><a href="#">Produtos</a></li>
            <li class="nav-item"><a href="#">Ajuda</a></li>
            <li class="nav-item"><a href="perfil.php">Perfil</a></li>
        </ul>
        <div class="menu" onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

<!-- Cart Sidebar -->
<div id="cartSidebar" class="cart-sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleCart()">&times;</a>
    <h2></h2>
    <div class="cart-items">
        <!-- Itens do carrinho aqui -->
    </div>
</div>
<main>
    <br><br><br><br>
    <section class="container">
        <div class="header">
            <h2>Olá, <?php echo $full_name; ?></h2>
        </div>
        <div class="grid">
            <a href="#">
                <i class='bx bx-id-card'></i>
                <p>Meu cadastro</p>
            </a>
            <a href="#">
                <i class='bx bx-key'></i>
                <p>Trocar senha</p>
            </a>
            <a href="#">
                <i class='bx bx-cart'></i>
                <p>Meus pedidos</p>
            </a>
            <a href="#">
                <i class='bx bx-heart'></i>
                <p>Favoritos</p>
            </a>
            <a href="#">
                <i class='bx bx-map'></i>
                <p>Meus Endereços</p>
            </a>
            <a href="#">
                <i class='bx bx-chat'></i>
                <p>Meus Tickets</p>
            </a>
            <a href="logout.php">
                <i class='bx bx-log-out'></i>
                <p>Sair</p>
            </a>
        </div>
    </section>
</main>
</body>
</html>
