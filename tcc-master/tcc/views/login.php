<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_login.css); </style>

</head>
<body>
<form action="../controlador/usuario.php?acao=verifica" method="post">
  <div id="usuario">

      <input type="text" class="form-control inputLogin" name="usuario" placeholder="Usuario" style="width: 200px"> <br><br>



  <div id="senha">

        <input class="form-control inputLogin" type="password" name="senha" placeholder="Senha" style="width: 200px"> <br><br>



  <div id="entrar">
   
        <button name="gravar" type="submit" class="btn btn-primary btn-lg">Entrar</button> <br> <br>



  <div id="cadastro">

        Não possui uma conta?
        <a href="../views/cadastro.php">Cadastre-se</a> <br><br>
        


  <div id="esqueceu_senha">

      <a href="..">Esqueceu sua senha?</a>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      </form>
</body>
</html>