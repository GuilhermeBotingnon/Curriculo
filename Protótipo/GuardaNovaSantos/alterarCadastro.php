<?php

include_once('conexao.php');


$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$uf = $_POST['uf'];
$estadocivil = $_POST['estadocivil'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];
$rua = $_POST['rua'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$experiencia = $_POST['experiencia'];
$id_cooperado = $_POST['id'];

try {
    $stmt = $conn->prepare("UPDATE infocooperados SET nome = :nome,
        nome = :nome,
        nascimento = :nascimento,
        uf = :uf,
        estadocivil = :estadocivil,
        cep = :cep,
        numero = :numero,
        bairro = :bairro,
        cidade = :cidade,
        complemento = :complemento,
        rua = :rua,
        email = :email,
        celular = :celular,
        experiencia = :experiencia WHERE id = :id_cooperado");

    $stmt->execute(array(
        ':nome' => $nome,
        ':nascimento' => $nascimento,
        ':uf' => $uf,
        ':estadocivil' => $estadocivil,
        ':cep' => $cep,
        ':numero' => $numero,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':complemento' => $complemento,
        ':rua' => $rua,
        ':email' => $email,
        ':celular' => $celular,
        ':experiencia' => $experiencia,
        ':id_cooperado' => $id_cooperado,
    ));

    header("refresh:0;url=arquivoscadastro.php");
    echo "<script>alert('Cadastro editado com sucesso');</script>";
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
