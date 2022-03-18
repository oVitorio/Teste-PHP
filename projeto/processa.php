<?php

session_start(); //Iniciar a sessao

//Limpar o buffer de saida
ob_start();

//Incluir a conexao com BD
include_once "conexao.php";

//Receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

//Verificar se o usuario clicou no botao
if(!empty($dados['CadUsuario'])){
    $query_usuario = "INSERT INTO pessoa
                (nome, dt_nascimento, escolaridade) VALUES
                (:nome, :dt_nascimento, :escolaridade)";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':dt_nascimento', $dados['dt_nascimento'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':escolaridade', $dados['escolaridade'], PDO::PARAM_STR);
    $cad_usuario->execute();
    var_dump($conn->lastInsertId());
    //Recuperar o ultimo id inserido
    $id_usuario = $conn->lastInsertId();

    $query_telefone= "INSERT INTO telefone 
                (idpessoa, telefone  ) VALUES 
                ( :usuario_id, :telefone )";
    $cad_telefone = $conn->prepare($query_telefone);
    $cad_telefone->bindParam(':usuario_id', $id_usuario, PDO::PARAM_INT);
    $cad_telefone->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
    $cad_telefone->execute();

    //Criar a variavel global para salvar a mensagem de sucesso
    $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";

    //Redirecionar o usuario
    header("Location: index.php");
}else{
    //Criar a variavel global para salvar a mensagem de erro
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";

    //Redirecionar o usuario
    header("Location: index.php");
}
