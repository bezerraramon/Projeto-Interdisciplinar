<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/cadastroUsuario.css" media="screen" />
</head>
<body>
    
   
    
    <div id="divCentral">
        
        <img src="../img/logo-fundo-branco.png" id="img"  ><br>
        <h1>Inscreva-se </h1>
        <form action="efetuaCadastroUsuario.php" method="POST">
            <div class="inputs">
                <input type="text" name="nome" placeholder="Nome completo:" required>
            </div>
            <div class="inputs">
                <input type="text" name="email" placeholder="E-mail:" required>
            </div>
            <div class="inputs">
                <input type="password" name="password" placeholder="Senha:" required>
            </div>
            <div class="inputs">
                <input type="password" name="confirmPassword" placeholder="Confirme a sua senha:">
            </div>

            <div>
                <button type="submit" id="button">Criar Conta</button>
            </div>
        </form>
    </div>
</body>
</html>