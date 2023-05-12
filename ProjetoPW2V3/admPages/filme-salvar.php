<?php  
    $filme = $_POST['txFilme'];
    $genero = $_POST['txGenero'];
    $ano = $_POST['txAno'];
    $descricao = $_POST['txDescricao'];
    
    include("../conexao.php");

    $stmt = $pdo->prepare("insert into tbfilmes 
    values(null,'$filme','$genero','$ano','$descricao')");	    
	$stmt ->execute();    

    header("location:admPage.php");    
    
?>