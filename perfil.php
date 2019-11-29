<?php
//Definindo array de pessoas 
$pessoas=[
    [
        "nome" => "Elizabete Moura",
        "idade" => 48,
        "feminino"=> false,
    ],
    [
        "nome" => "Gabrinne Oliveira",
        "idade" => 20,
        "feminino"=> true,
    ],
    [
        "nome" => "Ricardo Narciso",
        "idade" => 27,
        "feminino"=> false,
    ]
];

$pos=2;
$pessoa = $pessoas[$pos];

// echo('<pre>');
// print_r($pessoa);
// echo('</pre');
// die();
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
        <img src="./img/foto.jpg" alt="<?= $pessoa['nome'];?>">
        <div class="dados">
            <div class="info">
                <span>Nome:</span>
                <div> <?= $pessoa['nome'];?> </div>
            </div>
            <div class="info" alt="<?= $pessoa['idade'];?>">
                <span>Idade:</span>
                <div> <?= $pessoa['idade'];?> </div>
            </div>
            <div class="info" >
                <span>Sexo:</span>
                <div>
                    <?php 
                        // if ($pessoa ['feminino']) {
                        // echo ("feminino")
                        // } else {
                        // echo ("Masculino");
                        // }
                        
                        // echo ($pessoa1['feminino'] ? 'Feminino' : 'Masculino');
                    ?> 

                    <?= $pessoa['feminino'] ? 'Feminino' : 'Masculino' ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>