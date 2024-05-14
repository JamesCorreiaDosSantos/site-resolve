<?php
include "ReplDB.php";
$db = new ReplDB(getenv("REPLIT_DB_URL"));

  session_start();
  if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
      
        $idEmailLoginEmail = $_SESSION['email'];
        $valorSenhaEmail = $db->get($idEmailLoginEmail);
    
        $valorSenhaEmail2 = $_SESSION['senha'];
    
        if($valorSenhaEmail == $valorSenhaEmail2){
             echo '<script>';
              echo 'function minhaFuncaoJS() {';
              echo '    alert("Bem Vindo");';
              echo '    window.location.href = "\produtos.php";';
              echo '}';
              echo '</script>';
        }else{
          echo '<script>';
          echo 'function minhaFuncaoJS() {';
          echo '    alert("faça login para ter acesso ou cadastre-se");';
          echo '    window.location.href = "\login.php";';
          echo '}';
          echo '</script>';
        }
    }else{
      echo '<script>';
      echo 'function minhaFuncaoJS() {';
     echo '    alert("faça login para ter acesso ou cadastre-se");';
      echo '    window.location.href = "\login.php";';
      echo '}';
      echo '</script>';
    }
  

?>

<!DOCTYPE html>
<html>
<head>
    <title>resolve</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href= "style.css">
</head>
<body>


   

  <script type="module">
    import { Toast } from 'bootstrap.esm.min.js'

    Array.from(document.querySelectorAll('.toast'))
      .forEach(toastNode => new Toast(toastNode))
  </script>


  <script>
      minhaFuncaoJS();
  </script>






</body>
</html>