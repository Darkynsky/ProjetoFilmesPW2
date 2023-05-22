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
        $id = $_GET['id'];
        //echo $id;
    ?>

    <?php
        $stmt = $pdo->prepare("select * from tbFilme where idFilme='$id'");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>  
    
        <section>
            <div>
                <img src="<?php echo $row[9]; ?>" />
            </div>
        </section>
            
        <section >
            <h1> <?php echo $row[1]; ?> </h1>
            <p> <?php echo $row[2]; ?> </p>                        
            <p> <?php echo $row[3]; ?> </p>                        
            <p> <?php echo $row[4]; ?> </p>                        
            <p> <?php echo $row[5]; ?> </p>                        
            <p> <?php echo $row[6]; ?> </p>                        
            <p> <?php echo $row[7]; ?> </p>                            
        </section>
           
                
            
        

    <?php }	?>


    
</body>
</html>