<table class="tbExibicao">
    <thead>
        <tr>
            <th scope="col">Filme</th>
            <th scope="col">Gênero</th>
            <th scope="col">Ano de lançamento</th>
            <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $stmt = $pdo->prepare("select * from tbfilmes");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                  echo "</tr>";
                }	
            ?>
    </tbody>
</table>