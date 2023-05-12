<?php

    $id = $_GET['id'];

    //echo $id;

    include("../conexao.php");

    $stmt = $pdo->prepare("delete from tbcontato where idFilmes = $id");	    
	$stmt ->execute();    

    header("location:admPage.php"); 



?>