<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="conteudo">
<?php 
        $id = $_GET['id'];
        // echo $id;
    ?>

    <?php
        $stmt = $pdo->prepare("select * from tbfilmes where idFilmes='$id'");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>  
        <div class="exibirFilmeInterno">
            <img src="<?php echo $row[9]; ?>" />
            <h1> <?php echo $row[1]; ?> </h1>
            <p> <?php echo $row[2]; ?> </p>                        
            <p> <?php echo $row[3]; ?> </p>                        
            <p> <?php echo $row[4]; ?> </p>                        
            <p> <?php echo $row[5]; ?> </p>                        
            <p> <?php echo $row[6]; ?> </p>                        
            <p> <?php echo $row[7]; ?> </p> 
        </div>
        
    <?php }	?>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>