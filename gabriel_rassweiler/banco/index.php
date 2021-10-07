<?php

try {
    $conn = new PDO(
        'mysql:host=localhost;dbname=desenvolvimentoweb1', 'root', ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('SELECT * FROM CIDADES');
    $stmt->execute();
    $update = $stmt->fetchAll(); 

    if (!$update) {
        echo 'Erro ao Consultar';
    } else {
        print_r($update);
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
