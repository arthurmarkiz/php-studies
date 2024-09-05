<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    if (empty($username) || empty($email) || empty($pwd)) {
        header('Location: ../index.php');
        exit();
    }

    try {
        // Pegando o arquivo com a conexão do db
        require_once 'dbh.inc.php';

        // Criando a query que será inserida
        $query = 'INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);';

        // Preparando a query e os VALUES para serem inseridos e executando o método
        $statement = $pdo -> prepare($query);
        $statement -> bindParam(':username', $username);
        $statement -> bindParam(':pwd', $pwd);
        $statement -> bindParam(':email', $email);
        $statement -> execute();

        // Fechando a conexão e a query
        $pdo = null;
        $statement = null;

        // Redirecionando o usuário para a página inicial e fechando o script
        header('Location: ../index.php');
        die();

    } catch (PDOException $e) {
        die('Query failed: ' . $e -> getMessage());
    }
} else {
    header('Location: ../index.php');
}