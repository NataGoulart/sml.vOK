<div class="tudo">
<?php
          include("conecta.php");
  
          
          $login =  $linhas["login"];
          $codigo =  $linhas["codigo"];
          
          $comando = $pdo->prepare("SELECT * FROM carrinho WHERE Login='$login' and Codigo='$codigo'");;
          $comando->bindParam(":codigo", $codigo);
          $comando->bindParam(":login", $login);
          $resultado = $comando->execute();

    




		
?></div>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrinho.css">
    <link rel="shortcut icon" href="imagens/icone-da-pagina.png" type="image/x-icon">
    <title>Smiling</title>
   

</head>
<body>
    
    <header>
    </nav>
   <center>
       <a href="index.html"><img src="imagens/smlAGRvaiP.png" width="200px"></a>
   </center> 
</header>


</body>
</html> 


