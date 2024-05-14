<!DOCTYPE html>
<html>
<head>
    <title>resolve</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href= "style.css">
</head>
<body>


   <h2 class="adaptar cor">Resolve a Sua loja de Soluções</h2>
  
  <nav class="navbar navbar-expand-lg cor">
    <div class="container-fluid">
      <a class="navbar-brand" href="/esolve.php">Resolve</a>
      
      <div class=" navbar-collapse" id="navbarNav">
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
            <a class="nav-link"  href="/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/ajuda.php">Ajuda</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row no-gutters alterar">
    <div class="col-2 col-md-2">
      <img src="\imagens\calculadora.jpg"  alt="image" class="img-thumbnail"">
    </div>
    
    <div class="col-6 col-sm-6 col-md-6">
      <h2>Calculadora</h2>
      <p>Precisando de calculos precisos ? <br>acesse agora mesmo nossa calculadora e não fique perdendo tempo pois tempo é dinheiro</p>

        <form
        oninput="x.value = eval(a.value + c.value + b.value)">
          <input type="number" id="a" name="a" placeholder="digite o valor">
          <input type="text" id="c" name="c" placeholder="% * / + -" size="1">
          <input type="number" id="b" name="b" placeholder="digite o valor"><br><br>
          Resultado =
          <output name="x" for="a b"></output><br><br>
        </form>
      
    </div>
  </div>

  <hr>

  <div class="row no-gutters ">
  <div class="col-2 col-md-2">
    <img src="\imagens\imc2.png"  alt="image" class="img-thumbnail"">
  </div>

  <div class="col-6 col-sm-6 col-md-6">
      <h2>IMC</h2>
      <p>Não deixe as coisas mais importantes pra depois utilize nosso aplicativo e verifique agora mesmo seu Indice de massa corporal</p>

        <form
        oninput="x.value = eval(a.value + b.value + c.value * c.value )">
          <input type="number" id="a" name="a" placeholder="digite o valor">
          <input type="hidden" id="b" name="b"  value="/">
          <input type="number" id="c" name="c" placeholder="digite o valor"><br><br>
          Resultado =
          <output name="x" for="a c"></output>  kg/m²<br><br>
        </form>

    </div>
  </div>
  
  
  
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

          <img  src="imagens/whats.png">

        </a>

        <a href="https://outlook.live.com/owa/" class="icon-email" target="_blank" title="https://outlook.live.com/owa/">

          <img src="imagens/email.png">

        </a>

        </div>

        <div> 

          <p >James Correia - todos os direitos reservados!!</p>

        </div>

    </div>


  </footer>


</body>
</html>
