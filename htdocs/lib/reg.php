<?php
    
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($login) < 2){
        echo "Login must be at least 2 characters long.";
        exit();
    }
    if (strlen($name) < 2){
        echo "Name must be at least 2 characters long.";
        exit();
    }
    if (strlen($password) < 8){
        echo "Password must be at least 8 characters long.";
        exit();
    }
    if (strlen($email) < 4 && !str_contains($email, '@')){
        echo "Password must be at least 8 characters long.";
        exit();
    }
    // Password hashing
    
    $salt = 'ALkdfoöjacmnjn12367dhasjd';
    $password = md5($salt.$password);

    // DB
    require 'db.php';

    $sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $name, $email, $password]);

    header('Location: /index.php');