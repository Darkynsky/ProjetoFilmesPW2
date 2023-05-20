<?php  
    $filme = $_POST['txFilme'];
    $diretor = $_POST['txDiretor'];
    $duracao = $_POST['txDuracao'];
    $descricao = $_POST['txDescricao'];
    $ano = $_POST['txAno'];   
    $idGenero = $_POST['txGenero']; 
    $imagemPrincipal = $_POST['txImgPrincipal'];
    $imagemInterna = $_POST['txImgInterna'];
    
    include("../conexao.php");

    $stmt = $pdo->prepare("insert into tbfilmes 
    values(null,'$filme', '$diretor', '$duracao', '$descricao','$ano','$genero','$txImgPrincipal', '$txImgInterna')");	    
	$stmt ->execute();    

    header("location:addfilme.php");    
    
?>