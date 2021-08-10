<?php
    include 'BancoDeDados.php';
    $nome = $_POST['Nome'];
    $sql = "INSERT INTO demonstracao (nome) values ('$nome')";
    $conn -> query($sql);
    $conn -> close();
?>