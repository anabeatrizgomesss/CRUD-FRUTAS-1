<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel='stylesheet' href='style.css'> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Quitanda</title>
</head>
<body>
    <div class="container-formulario">
        <h1>frutas</h1>
    <?php
if (isset($_POST['submit'])){
$nome=$_POST['nome'];
$tamanho=$_POST['tamanho'];
$peso=$_POST['peso'];
$quantidade=$_POST['quantidade'];
$preco=$_POST['preco'];


    $stmt = $pdo->prepare('INSERT INTO frutas(nome, tamanho, quantidade, peso, preco)
    VALUES (:nome, :tamanho, :quantidade, :peso, :preco)');
    $stmt->execute(['nome'=> $nome, 
    'tamanho'=>$tamanho,
     'quantidade'=> $quantidade, 'peso'=>$peso,'preco'=>$preco]);

    if($stmt->rowcount()){
        echo '<span>Cadasto feito com sucesso!</span>';
    }else{
        '<span>Erro ao cadastrar. tente novamente mais tarde.</span>';
    }
}
if(isset($erro)){
    echo '<span>' . $erro .'</span>';
}

?>
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>
        
    <label for="tamanho">tamanho:</label>
    <input type="tamanho" name="tamanho" required><br>
        
    <label for="peso">peso:</label>
    <input type="text" name="peso" required><br>
    
    <label for="quantidade">quantidade:</label>
    <input type="quantidade" name="quantidade" required><br>
    
    <label for="preço">preço:</label>
    <input type="text" name="preco" required><br>
    <div>
        <button type="submit" name="submit" value="agendar">concluir</button>
        <button><a href='index.php'>cliente cadastro</a></button>
        <button><a href='listar.php'>lista</a></button>
        <div>
</form>
    </div>
</body>
</html>