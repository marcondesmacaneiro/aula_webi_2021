<?php
    session_start();
    if (isset($_POST['salvar'])){
    $_SESSION ['valor'] = $_POST['valor'];
    echo "Valor alterado com sucesso!";}

?>
<a href="script2.php">Teste</a>

<r>
<form method="post">
    <input type="text" name="valor">
    <input type="submit" name="salvar">
</form>


