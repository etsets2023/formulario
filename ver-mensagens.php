<?php
require_once 'config.php';

$senhaSecreta = "Superacao2024@";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhaDigitada = $_POST['senha'];

    //DIGITOU A SENHA
    if($senhaDigitada === $senhaSecreta){
        $sql = 'SELECT * FROM mensagens';
        $result = $conn->query($sql);
    }else{
        echo "<h1>Senha Incorreta!</h1>";
    }


}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver mensagens</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <section class="formulario">
        <h1>Digite sua senha.</h1>
        <div class="container">
            <form method="post" class="card"><!---Sem o action enviae os dados para este mesmo arquivo debanco de dados quando clicar no botão enviar-->
                <div class="label-float">   
                    <input type="password" id="senha" name="senha" required>  
                    <label for="senha">Senha</label> 
                </div>
                <div class="container-formulario-botao">
                    <button id="enviar" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    
    <?php if(isset($result) && $result->num_rows >0) : ?>
        <h2>Mensagens</h2><br>
        <ul>
            <?php while($row = $result ->fetch_assoc()) : ?>
                <li>
                    <strong>Nome: </strong> <?php echo $row["nome"];?><br>
                    <strong>Email: </strong> <?php echo $row["email"];?><br>
                    <strong>Telefone: </strong> <?php echo $row["telefone"];?><br>
                    <strong>Mensagem: </strong> <?php echo $row["mensagem"];?><br>
                    <strong>Data e Hora: </strong> <?php echo $row["data"]."às".$row["hora"] ;?><br><br>
                </li>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
            <h2>Nenhuma mensagem.<h2>
    <?php endif; ?>  
    

  

    <script src="./js/script.js"></script>
</body>
</html>