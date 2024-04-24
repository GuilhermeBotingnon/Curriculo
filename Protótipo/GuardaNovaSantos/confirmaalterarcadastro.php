<?php

include_once('conexaocooperado.php');


$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$nacionalidade = $_POST['nacionalidade'];
$uf = $_POST['uf'];
$estadocivil = $_POST['estadocivil'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao  = $_POST['orgao'];
$formacao  = $_POST['formacao'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];
$rua = $_POST['rua'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$profissao = $_POST['profissao'];
$experiencia = $_POST['experiencia'];
$id_cooperado = $_POST['id_cooperado'];
 
try {
    $stmt = $conn->prepare("UPDATE infocooperados SET matricula = :matricula,
        nome = :nome,
        nascimento = :nascimento,
        nacionalidade = :nacionalidade,
        uf = :uf,
        estadocivil = :estadocivil,
        cpf = :cpf,
        rg = :rg,
        orgao = :orgao,
        formacao = :formacao,
        cep = :cep,
        numero = :numero,
        bairro = :bairro,
        cidade = :cidade,
        complemento = :complemento,
        rua = :rua,
        email = :email,
        celular = :celular,
        profissao = :profissao,
        experiencia = :experiencia WHERE id_cooperado = :id_cooperado");

    $stmt->execute(array(
        ':matricula' => $matricula,
        ':nome' => $nome,
        ':nascimento' => $nascimento,
        ':nacionalidade' => $nacionalidade,
        ':uf' => $uf,
        ':estadocivil' => $estadocivil,
        ':cpf' => $cpf,
        ':rg' => $rg,
        ':orgao' => $orgao,
        ':formacao' => $formacao,
        ':cep' => $cep,
        ':numero' => $numero,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':complemento' => $complemento,
        ':rua' => $rua,
        ':email' => $email,
        ':celular' => $celular,
        ':profissao' => $profissao,
        ':experiencia' => $experiencia,
        ':id_cooperado' => $id_cooperado,
    ));

    header( "refresh:0;url=arquivoscadastro.php" );
    echo "<script>alert('Cadastro editado com sucesso');</script>";

} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>