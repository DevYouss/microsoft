<?php

$connexionPDO = new PDO(
    'mysql:host=localhost;dbname=microsoft;charset=utf8',
    'root',
    'root'
);

if(isset($_POST["connexion"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $creation = $connexionPDO->prepare("INSERT INTO utilisateur (email, password) VALUES (:email, :password)");

    $creation->bindValue(":email", $email);
    $creation->bindValue(":password", $password);

    $creation->execute();
    
    header("Location: index.php");
}