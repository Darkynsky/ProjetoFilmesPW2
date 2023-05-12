<div class = "container-flex">
    <div class = "container">
        <section id="contato">
            <form action="contato-salvar.php" method="post">
                <div>
                    <input type="text" placeholder="Nome" name="txNome" class="campFormContato"/>
                </div>

                <div>
                    <input type="text" placeholder="E-mail" name="txEmail" class="campFormContato"/>
                </div>

                <div>
                    <input
                        type="text"
                        placeholder="Assunto"
                        name="txAssunto"
                        class="campFormContato"/>
                </div>

                <div>
                    <textarea placeholder="Mensagem" name="txMensagem" class="campFormContatoTEXTAREA"></textarea>
                </div>

                <div>
                    <input type="submit" value="SALVAR" class = "btn_salvar"/>
                </div>
            </form>
        </section>
    </div>
</div>