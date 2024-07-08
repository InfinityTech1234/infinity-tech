<?php
session_start();

include 'include/include.php';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $cpf = $_POST['cpf'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $source = $_POST['source'];

    $sql = "INSERT INTO users (full_name, cpf, gender, birth_date, phone, email, password, source)
            VALUES ('$full_name', '$cpf', '$gender', '$birth_date', '$phone', '$email', '$password', '$source')";

    if ($conn->query($sql) === TRUE) {
        // Save user's full name and email in the session
        $_SESSION['full_name'] = $full_name;
        $_SESSION['email'] = $email;

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/register.css">

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

        .container {
            display: flex;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1300px; /* Reduzir o tamanho máximo da largura */
            width: 80%;
            overflow: hidden;
            position: relative;
        }

        .left {
            flex: 0.35; /* Ajustar o espaço ocupado pela imagem */
            background: url('https://img.freepik.com/fotos-premium/molecula-de-estrutura-e-comunicacao-dna-atomo-neuronios-fundo-de-molecula-cientifica-para-medicina-ciencia-tecnologia-quimica-ilustracao_208588-1667.jpg') no-repeat center center; /* Definir a imagem de fundo */
            background-size: cover; /* Garantir que a imagem ocupe todo o espaço */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right {
            flex: 0.65; /* Ajustar o espaço ocupado pelo formulário */
            padding: 20px;
            box-sizing: border-box;
            position: relative;
        }

        h2 {
            text-align: center;
            font-size: 20px;
            color: #276a81;
            margin-bottom: 15px;
        }
               
        .back-arrow {
            width: 24px;
            height: 24px;
            display: inline-block;
            background-image: url('https://img.icons8.com/ios-filled/50/000000/left.png');
            background-size: cover;
            position: absolute;
            left: 30px;
            top: 30px;
            text-decoration: none;
            font-size: 20px;
            color: #276a81;
        }
        
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
            background: #f9f9f9;
        }
        .form-group input:focus {
         border-color: #20596c;
         outline: none;
}

        .gender-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .gender-options label {
            margin-right: 10px;
        }

        input[type="checkbox"] {
            margin-right: 100px;
        }

        .checkbox-group {
            grid-column: span 2;
            display: flex;
            align-items: center;
        }

        button {
            grid-column: span 2;
            padding: 10px;
            background-color: #276a81;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #20596c;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left {
                display: none;
            }

            form {
                grid-template-columns: 1fr;
            }

            .checkbox-group {
                flex-direction: column;
                align-items: flex-start;
            }

            button {
                width: 100%;
            }

            .seta {
                left: 10px;
                top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <h2>
            <a href="login.php" class="back-arrow"></a>
                Criar Conta
            </h2>
            <form method="post" action="register.php">
                <div class="form-group">
                    <label for="full_name">Primeiro nome*</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF*</label>
                    <input type="text" id="cpf" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gênero*</label>
                    <select id="gender" name="gender" required>
                        <option value="Homem">Homem</option>
                        <option value="Mulher">Mulher</option>
                        <option value="Outros">Outros</option>
                        <option value="Não especificar">Não especificar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">Data de nascimento*</label>
                    <input type="date" id="birth_date" name="birth_date" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone celular*</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail*</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Crie sua senha*</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="source">Onde você conheceu a Inifnity-tech?*</label>
                    <select id="source" name="source" required>
                        <option value="Google">Google</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="offers" name="offers" checked>
                    <label for="offers">Quero receber ofertas e novidades por e-mail, SMS, WhatsApp ou mensagens nos App's
                        Infinity-tech!</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Li e estou de acordo com as políticas da empresa e políticas de privacidade.*</label>
                </div>
                <button type="submit">Continuar</button>
            </form>
        </div>
    </div>
</body>
</html>
