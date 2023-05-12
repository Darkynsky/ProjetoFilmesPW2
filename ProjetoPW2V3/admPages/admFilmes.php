<section id="filme">
    <form action="filme-salvar.php" method="post">
        <div>
            <input type="text" placeholder="Filme" name="txFilme" class="campFormContato"/>
        </div>

        <div>
            <input type="text" placeholder="Gênero" name="txGenero" class="campFormContato"/>
        </div>

        <div>
            <input
                type="text"
                placeholder="Ano de lançamento"
                name="txAno"
                class="campFormContato"/>
        </div>

        <div>
            <textarea
                placeholder="Descrição do filme"
                name="txDescricao"
                class="campFormContatoTEXTAREA"></textarea>
        </div>

        <div>
            <input type="submit" value="SALVAR" class="btn_salvar"/>
        </div>
    </form>
</section>

<table class="tbExibicao">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Filme</th>
            <th scope="col">Gênero</th>
            <th scope="col">Ano de Lançamento</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $stmt = $pdo->prepare("select * from tbfilmes");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> 
                            <a href='filme-remover.php?id=$row[0]'> Remover </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
    </tbody>
</table>