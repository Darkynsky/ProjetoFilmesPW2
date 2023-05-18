<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>LOGIN</title>
</head>
<body>
    <a href="adm\home.php"><button>ADM</button></a>
    <a href="user\home.php"><button>USUARIO</button></a>
    <div id="totalPage">
        <div id="container1">
        <form method="post" action="" id="formLogin">
            <h4>Já possui cadastro? <br/> Faça o login</h4>
            <label for="usuario">Usuário</label><br />
            <input type="text" placeholder="Ex.:Félix" name="usuario" required><br />
            <label for="password">Senha</label><br />
            <input type="password" placeholder="Digite a senha" name="password" required><br />
            <input type="submit" value="Entrar">               
        </form>
        
        </div>
        <div id="container2">
        <form method="post" action="" id="formCadastro">            
            <h4>Não possui cadastro? <br/> Cadastre-se!</h4>
            <label for="usuario">Usuário</label>
            <input type="text" placeholder="Ex.:Félix" name="usuario" required><br/>
            <label for="emailUser">Email</label><br/>
            <input type="text" placeholder="Ex.:felix@teste.com" name="emailUser" required><br/>
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite a senha"><br/>
            <label for="password">Repita a senha</label>
            <input type="password" placeholder="Digite a senha novamente"><br/>
            <input type="submit" value="Cadastrar">
        </form>
        </div>
    </div>
</body>
</html>