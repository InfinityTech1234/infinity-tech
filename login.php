<?php
// Database connection
include 'include/include.php';

// Start session
session_start();

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user from the database
    $sql = "SELECT id, full_name, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Check if the password is correct
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Save email and full name to session and redirect to profile page
            $_SESSION['email'] = $email;
            $_SESSION['full_name'] = $row['full_name'];
            header("Location: index.php");
            exit();
        } else {
            echo "Senha inválida.";
        }
    } else {
        echo "Nenhum usuário com esse e-mail.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #276a81, #bad1e5);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <a href="index.php" class="back-arrow"></a>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSexlBn72bSyOnvBes9WgpsNJwpspCWeffQAQ&s" alt="Lock Icon">
                <h2>Já tem uma conta?</h2>
            </div>
            <p>Informe os seus dados abaixo para acessá-la.</p>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha *</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Lembrar meus dados</label>
                </div>
                <button type="submit">Acessar Conta</button>
                <a href="forgot-password.php" class="forgot-password">Esqueci minha senha</a>
            </form>
        </div>
        <div class="form-container">
            <div class="form-header">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGtIKTAHCTXGZBkjMUqQEWK9kf8-TPinuv3g&s" alt="New Client Icon">
                <h2>Novo Cliente</h2>
            </div>
            <p>Criar uma conta é fácil! Informe seus dados e uma senha para aproveitar todos os benefícios de ter uma conta.</p>
            <a href="register.php" class="register-link">Cadastrar-se</a>
        </div>
    </div>
</body>
</html>
