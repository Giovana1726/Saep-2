<?php
$severname = 'localhost';
$database  = 'Saep02';
$username  = 'root';
$password  = '';

$conn = mysqli_connect($severname, $database, $username, $password);

if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];

    $sql = "INSERT INTO Funcionario (Nome, Cargo) VALUES ( $nome, $cargo)";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST['data'];
        $hora = $_POST['hora'];
    
        $sql = "INSERT INTO Registros (data, hora) VALUES ( $data, $hora)";
}
}

?>