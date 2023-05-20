<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $stmt = $pdo->prepare("select * from tbFilme");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>    
            <a href="filme-interno.php?id=<?php echo $row[0]; ?> ">    
                <figure>
                    <img src="<?php echo $row[8]; ?>" />
                    <figcaption>
                        <h1> <?php echo $row[1]; ?> </h1>
                        <p> <?php echo $row[3]; ?> </p>                        
                    </figcaption>        
                </figure>
            </a>

    <?php }	?>

    
    
    
</body>
</html>