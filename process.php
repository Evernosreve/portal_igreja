<?php
// Configurações do banco de dados
$servername = "https://github.com/Evernosreve/portal_igreja/edit/main/process.php ";    
$username = "seu_usuario";  
$password = "sua_senha";  
$dbname = "nome_do_banco";  

// Conectando ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

//  inserção no banco de dados
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$pedido_oracao = $_POST['pedido_oracao'];

//   dados no banco de dados
$sql = "INSERT INTO pedidos_oracao (nome, telefone, email, pedido_oracao) 
        VALUES ('$nome', '$telefone', '$email', '$pedido_oracao')";

if ($conn->query($sql) === TRUE) {
    echo "Pedido de oração enviado com sucesso!";
} else {
    echo "Erro ao enviar pedido de oração: " . $conn->error;
}

// Fechando a conexão bd
$conn->close();
?>
