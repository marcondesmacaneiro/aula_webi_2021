<?php

try {
    $conn = new PDO(
        'mysql:host=localhost;dbname=desenvolvimentoweb1', 'root', ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare(
        'SELECT cidades.*, 
        estados.sigla as estado_sigla, 
        estados.nome as estado_nome 
        FROM cidades,estados 
        WHERE cidades.estado = estados.id');
    $stmt->execute();
    $resultado = $stmt->fetchAll();

    if (!$resultado) {
        echo 'Erro ao Consultar';
    }

    echo '<table>
          <tr>
            <thead>
                <th style="border: 1px solid black">ID</th>
                <th style="border: 1px solid black">Nome</th>
            </thead>
          </tr>
          <tbody>
    ';
        foreach ($resultado as $item) {
            echo '
                <tr>
                    <td style="border-bottom: 1px solid black">' . $item['id'] . '</td>
                    <td style="border-bottom: 1px solid black">' . utf8_decode($item['nome']) . '</td>
                </tr>
            ';
        }
    echo '
        </tbody>
        </tr>
        </table>
    ';
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
