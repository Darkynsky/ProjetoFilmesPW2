<section id="filme_inserir">
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

<!-- FORMULARIO DE EDIÇÃO -->
<section id="filme_editar">
    <form action="filme-editar.php" method="post">
        <div>
            <input
                type="hidden"
                name="txIdFilme"
                class="campFormContato"
                value="<?php echo @$_GET['idfilme']; ?>"/>
        </div>
        <div>
            <input
                type="text"
                placeholder="Filme"
                name="txFilme"
                class="campFormContato"
                value="<?php echo @$_GET['filme']; ?>"/>
        </div>

        <div>
            <input
                type="text"
                placeholder="Gênero"
                name="txGenero"
                class="campFormContato"
                value="<?php echo @$_GET['genero']; ?>"/>
        </div>

        <div>
            <input
                type="text"
                placeholder="Ano de lançamento"
                name="txAno"
                class="campFormContato"
                value="<?php echo @$_GET['ano']; ?>"/>
        </div>

        <div>
            <textarea
                placeholder="Descrição do filme"
                name="txDescricao"
                class="campFormContatoTEXTAREA"><?php echo @$_GET['descricao']; ?></textarea>
        </div>

        <div>
            <input type="submit" value="SALVAR EDIÇÃO" class="btn_salvar"/>
        </div>
    </form>
</section>
<!-- FIM DO FORMULÁRIO DE EDIÇÃO -->


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
                            <a href='?id=$row[0]&filme=$row[1]&genero=$row[2]&ano=$row[3]&descricao=$row[4]'> Editar </a>
                            <a href='filme-remover.php?id=$row[0]'> Remover </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
    </tbody>
</table>