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

    <?php 
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8', 'pt_BR.utf-8', 'portuguese');
    $pneu = $_POST['pneu'];  // criando variaveis 
    $oleo = $_POST['oleo'];
    $vela = $_POST['vela'];

    echo '<p> Pedido processado ás: '
    . strftime('%A, %d de %B de %Y', strtotime('today'))
    . '</p>';

    echo $pneu .' pneus <br>';
    echo $oleo .' galões <br>';
    echo $vela .' velas <br>';
?>
</body>
</html>