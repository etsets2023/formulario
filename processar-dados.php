<?php
require_once 'config.php';

//PEGANDO OS DADOS VINDOS DO FORMULÁRIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');


//PREPARAR COMANDO PARA TABELA
$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, telefone, mensagem, data, hora) VALUES (?,?,?,?,?,?)");
$smtp->bind_param("ssssss",$nome, $email, $telefone, $mensagem, $data_atual, $hora_atual);


//SE EXECUTAR CORRETAMENTE
if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
}else{
    echo "Erro no envio da mensagem: ".$smtp->error;
}

$smtp->close();
$conn->close();

?>