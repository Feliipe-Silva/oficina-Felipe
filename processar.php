<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina o Chicão</title>
</head>

<body>
    <h1>Oficina </h1>
    <h2>Pedidos </h2>
    <hr>

    <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8', 'pt_BR.utf-8', 'portuguese');
    $pneu = $_POST['pneu'];  // criando variaveis 
    $oleo = $_POST['oleo'];  // criando variaveis 
    $vela = $_POST['vela'];
    $valortotal = 0.00;
    $qtdtotal = 0;

    define ('PRECOPNEU', 100);
    define ('PRECOOLEO', 10);   
    define ('PRECOVELA', 4);

    $valortotal = ($pneu * PRECOPNEU) + ($oleo * PRECOOLEO) + ($vela * PRECOVELA);

    echo '<p> Pedido processado ás: '
        . strftime('%A, %d de %B de %Y', strtotime('today'))
        . '</p>';

    echo $pneu . ' pneus <br>';
    echo $oleo . ' galões <br>';
    echo $vela . ' velas <br>';
    
    //$valortotal = 0;
    $qtdtotal = $pneu + $oleo + $vela;

    if ($qtdtotal == 0) {
        echo '<br> Adicione um produto!';   
    } else {
        echo '<br> A quantidade é: ' .$qtdtotal;
    };

    //------------------------------------------------------------------------------
    echo '<hr>';
    
    if ($valortotal == 0) {
        echo 'SEM VALOR!';
    } else {
        echo '<br> *O valor total a pagar é R$:' .number_format($valortotal, 2, ",","."); // FORMATAÇÃO DE NUMERO , .
    };
    ?>
</body>
</html>