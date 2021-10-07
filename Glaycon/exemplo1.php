<?php 
try{$conn=new PDO(
	'mysql:host=localhost;dbname=glaycon','root', '');
	$conn -> setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
	echo'ERROR: ' . $e->getMessage();
}



$stmt = $conn -> prepare (
    'SELECT cidades. *,
    estados.sigla as estado_sigla,
    estados.nome as estado_nome
    from cidades,estados
    where cidades.estado = estados.id'
);
$stmt->execute();
$result =$stmt -> fetchAll();
print_r($result);
foreach($resultado as $linha)