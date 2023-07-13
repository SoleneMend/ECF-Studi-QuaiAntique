<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=quaiantique;', 'root', '');
}
catch (PDOException $e) {
    file_put_contents('error.log', $e->getMessage() . "\n", FILE_APPEND);
    echo 'Une erreur est survenue';
}