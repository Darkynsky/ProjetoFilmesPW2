<?php 
    
    $idFilmes= $_POST['id']; 
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
        where idFilmes ='$idFilmes';
        ");	 
		    
    $stmt ->execute();    

    /* header("location:addfilme.php");   */ 
    
?>