<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina o Chicão</title>
    <link rel="stylesheet" href="principal.css">
</head>

<body>
    <h1>Oficina </h1>
    <h2>Pedidos </h2>
    <hr>

    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo 'Pedido processado ás:' . date ("d /M /Y ") 
    . '<br>';

    $pneu = $_POST['pneu'];  // criando variaveis 
    $oleo = $_POST['oleo'];  // criando variaveis . 
    $vela = $_POST['vela'];
    $achar = $_POST['achar'];
    $valortotal = 0.00;
    $qtdtotal = 0;


    define ('PRECOPNEU', 100);
    define ('PRECOOLEO', 10);   
    define ('PRECOVELA', 4);

    $valortotal = ($pneu * PRECOPNEU) + ($oleo * PRECOOLEO) + ($vela * PRECOVELA);

    echo $pneu . ' pneus <br>';
    echo $oleo . ' galões <br>';
    echo $vela . ' velas <br>';
    

    $qtdtotal = $pneu + $oleo + $vela;
    
    if ($qtdtotal == 0) {
        echo '<br> Adicione um produto!';   
    };
    echo '<br> A quantidade é: ' .$qtdtotal;
    //------------------------------------------------------------------------------
    echo '<hr>';
    
    if ($valortotal == 0) {
        echo 'SEM VALOR!';
    } else {
        echo '<br> *O subtotal (valor sem a taxa) é de R$:' .number_format($valortotal, 2, ",","."); // FORMATAÇÃO DE NUMERO , .
    };
    $taxa = 0.22; // lucro presumindo

    $valortotal = $valortotal * (1 + $taxa);
    if ($pneu < 10) {
        $desconto = 0;
    } elseif (($pneu > 10) && ($pneu <= 49)) {
        $desconto = 0.05;   
    } elseif (($pneu > 49) & ($pneu <= 99)) {
        $desconto = 0.10;
    } else {
        $desconto = 0.15;
    }
    
    echo "<br> O valor total é de R$:" .number_format($valortotal, 2,",",".");
    $valortotal = $valortotal * (1 - $desconto);
    echo "<br> O valor total com desconto é de R$: " .number_format($valortotal, 2,",",".");

    switch ($achar) {
        case "a":
            echo '<p>Cliente regular</p>';
            break;
        case 'b':
            echo '<p>Anúncio de TV</p>';
            break;
        case 'c':
            echo '<p>Telefone</p>';
            break;
        case 'd':
            echo '<p>Boca a boca</p>';
            break;
        default:
        echo 'Clente não encontrado!';
    }
    ?>
</body>

</html>