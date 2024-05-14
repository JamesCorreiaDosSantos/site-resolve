<!DOCTYPE html>
<html>
<head>
    <title>resolve</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href= "style.css">
</head>
<body>


   <h2 class="adaptar cor">Resolve a Sua loja de Soluções</h2>

  <nav class="navbar navbar-expand-lg cor">
    <div class="container-fluid">
      <a class="navbar-brand" href="/esolve.php">Resolve</a>
      
      <div class="navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/esolve.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/verificaLogin.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sobre.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login.php" >Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ajuda.php" >Ajuda</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h2>Cadastre-se</h2>
  <form method="post" action="processar-login-cadastrar.php" >

    <label for="nome">Nome:</label><br>
    <input type="text" name="cadastroNome" id="cadastroNome" size="30" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="cadastroEmail" id="cadastroEmail" size="30" required><br><br>

     <label for="email">Senha:</label><br>
     <input type="password" name="cadastroSenha" id="cadastroSenha" maxlength="8" required><br><br>

    <input type="submit" value="Enviar"><br><br>

  </form>

    
  <footer class="footer">

    <div class="conteudo">

      <div class="social">

        <a href="https://pt-br.facebook.com/" class="icon-facebook" target="_blank" title="https://pt-br.facebook.com/">

          <img src="imagens/facebook.png">

        </a>

        <a href="https://twitter.com/login?lang=pt" class="icon-twitter" target="_blank" title="https://twitter.com/login?lang=pt">

          <img src="imagens/twitter.png">

        </a>

        <a href="https://www.youtube.com/" class="icon-youtube" target="https://www.youtube.com/" >

          <img src="imagens/youtube.png">

        </a>

        <a href="https://www.whatsapp.com/?lang=pt_br"target="_blank" class="icon-whats" title="https://www.whatsapp.com/?lang=pt_br" >

          <img src="imagens/whats.png">

        </a>

        <a href="https://outlook.live.com/owa/" class="icon-email" target="_blank" title="https://outlook.live.com/owa/">

          <img src="imagens/email.png">

        </a>

        </div>

        <div> 

          <p>James Correia - todos os direitos reservados!!</p>

        </div>

    </div>


  </footer>

</body>
</html>
