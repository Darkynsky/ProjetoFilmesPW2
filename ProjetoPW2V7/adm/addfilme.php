<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="conteudo">
    <div id="gerenciadorFilmes">
        <!-- FORMULARIO ADD FILME -->
        <div id="addFilme">
            <P>ADICIONAR FILME</P>
            <form action="filme-salvar.php" method="post">
                <input type="text" placeholder="Filme" name="txFilme" class="campText"/>
                <input type="text" placeholder="Gênero" name="txGenero" class="campText"/>
                <input
                    type="text"
                    placeholder="Ano de lançamento"
                    name="txAno"
                    class="campText"/>
                <textarea
                    placeholder="Descrição do filme"
                    name="txDescricao"
                    class="campTextArea"></textarea><br/>
                <input type="submit" value="SALVAR FILME" class="btn_salvar"/>
            </form>
        </div>
        <!-- FIM FORMULARIO ADD FILME -->

        <!-- FORMULARIO EDITAR FILME -->
        <div id="addFilme">
            <P>ATUALIZAR FILME</P>
            <form action="filme-editar.php" method="post">

                <input type="hidden" name="id" value="<?php echo @$_GET['idFilme']; ?>" />	

                <input type="text" placeholder="Filme" name="txFilme" class="campText" value="<?php echo @$_GET['filme']; ?>"/>

                <input type="text" placeholder="Gênero" name="txGenero" class="campText" value="<?php echo @$_GET['genero']; ?>"/>

                <input type="text" placeholder="Ano de lançamento" name="txAno" class="campText" value="<?php echo @$_GET['ano']; ?>"/>

                <textarea placeholder="Descrição do filme" name="txDescricao" class="campTextArea">
                    <?php echo @$_GET['descricao']; ?> 
                </textarea><br/>
                <input type="submit" value="ATUALIZAR FILME" class="btn_salvar"/>

            </form>
        </div>
        <!-- FIM FORMULARIO EDITAR FILME -->
    

    <!-- LISTA EXIBIR FILMES -->
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
                            <a href='?idFilme=$row[0]&filme=$row[1]&genero=$row[2]&ano=$row[3]&descricao=$row[4]'> Editar </a>
                            <a href='filme-remover.php?id=$row[0]'> Remover </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
        </tbody>
    </table>
    <!-- FIM LISTA EXIBIR FILMES -->
    </div>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>