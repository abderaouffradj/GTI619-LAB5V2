<?php 
    $host = 'localhost';
    $database = 'gti619_db';
    $user = 'root';
    $pass ='';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$database;charset=$charset";
    
    try {
        $pdo = new PDO ($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     }catch (PDOException $e){
        throw new PDOException($e->getMessage());     
    }

    require_once 'crud.php';
    require_once 'user.php';

    $crud = new crud($pdo);
    $user = new user($pdo);

   # $crud -> insert('administrateur@gmail.com', 'fradj', 'abderaouf', 1, 'password');
?>