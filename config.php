<?php

//CONFIGURAÇÕES DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'formulario';

//CONEXAO COM O BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha, $banco);//em parentêses, nome do servidor, nome do usuário, senha, nome do banco de dados


//VERIFICAR CONEXÃO
if($conn->connect_error){
    die("Falha ao se comunicar com o banco de dados: ".$conn->connect_error);
}

?>