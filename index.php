<?php
  //Definir o meu array associativo $pessoal;
  $pessoa1 = [
      "nome" => "Elizabete Moura",
      "idade" => 48,
      "feminino"=> false,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="pessoa">
        <img src="./img/foto.jpg" alt="<?= $pessoa1['nome'];?>">
        <div class="dados">
            <div class="info">
                <span>Nome:</span>
                <div> <?= $pessoa1['nome'];?> </div>
            </div>
            <div class="info" alt="<?= $pessoa1['idade'];?>">
                <span>Idade:</span>
                <div> <?= $pessoa1['idade'];?> </div>
            </div>
            <div class="info" >
                <span>Sexo:</span>
                <div>
                    <?php 
                        // if ($pessoa1 ['feminino']) {
                        // echo ("feminino")
                        // } else {
                        // echo ("Masculino");
                        // }
                        
                        // echo ($pessoa1['feminino'] ? 'Feminino' : 'Masculino');
                    ?> 

                    <?= $pessoa1['feminino'] ? 'Feminino' : 'Masculino' ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>