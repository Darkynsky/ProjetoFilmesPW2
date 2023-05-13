<?php 
    $idfilme = $_POST['txIdFilme']; 
    $filme = $_POST['txFilme'];
    $genero = $_POST['txGenero'];
    $ano = $_POST['txAno'];
    $descricao = $_POST['txDescricao'];
    
    include("../conexao.php");

    $stmt = $pdo->prepare("
        update tbfilmes set
        filme='$filme',
        genero='$genero',
        ano='$ano',
        descricao='$descricao',
        where idFilmes ='$idfilme';
        ");	    
	
    $stmt ->execute();    

    header("location:admPage.php");    
    
?>