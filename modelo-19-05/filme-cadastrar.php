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

    <form>
        <input type="text" placeholder="filme" name="txFilme"/>
        
        <select name="txIdGenero">
        <?php
            $stmt = $pdo->prepare("select * from tbGenero");	
            $stmt ->execute();            
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
        ?>    
            <option value="<?php echo $row['idGenero'] ?>"> 
                <?php echo $row['genero'] ?>
            </option>           
        <?php }	?>
        </select>
    </form>

    
</body>
</html>