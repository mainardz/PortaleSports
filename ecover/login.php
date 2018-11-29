<html>

<head>
    <link rel="icon" type="imagem/png" href="imagens/kboard.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/slate/bootstrap.min.css">
    <title> Ecover </title>
    <style type="text/css">
    form{
        position:absolute;
        left:50%;
        top:50%;
        margin-left:-110px;
        margin-top:-40px;
        
    }
    body{
        overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
        width: 100%;
        height: 100%;
        position: relative; /* criamos um contexto para posicionamento */
        background-image: url(imagens/torcida2.jpg);
        
    }
</style>

</head>

<body>

    <form action="index.php" method="post">

      <label>Login:</label><input type="text" name="username" id="username"><br/>
      <label>Senha:</label><input type="text" name="password" id="password"><br/>
      <a href="index.php"><input type="submit" name="submit" value="Entrar" style="float: right;"></a>

  </form>

</body>
</html>