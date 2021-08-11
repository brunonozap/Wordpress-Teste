<?php
    include 'BancoDeDados.php';
    $nome = $_POST['Nome'];
    $imagem = $_POST['Imagem'];
    //$sql = "INSERT INTO demonstracao (nome, imagem) values ('$nome', '$imagem')";
    $sql = "INSERT INTO demonstracao (nome) values ('$nome')";
    $conn -> query($sql);
    $conn -> close();
?>