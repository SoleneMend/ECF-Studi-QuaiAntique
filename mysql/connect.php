<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=quaiantique;', 'root', '');
}
catch (PDOException $e) {
    file_put_contents('error.log', $e->getMessage() . "\n", FILE_APPEND);
    echo 'Une erreur est survenue';
}

if (isset($_SESSION['user'])) {
    $check = $pdo->prepare('SELECT * FROM users WHERE user_mail = ?');
    $check->execute(array($_SESSION['user']['mail']));
    $data = $check->fetch();
    $row = $check->rowCount();

    $_SESSION['user'] = [
        'name' => $data['user_name'],
        'mail' =>  $data['user_mail'],
        'password' => $data['user_password'],
        'allergies' => $data['user_allergies'],
        'convives' => $data['user_nbConvives'],
        'role' => $data['user_role']
        ];
}