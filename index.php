<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
</head>
<body>
    <h1>Oficina o Chicão</h1>
<form action="processar.php" method="post">
<hr>
<table border="1">
    <tr>
        <th>Item</th>
        <th>Quantidade</th>
    </tr>
    <tr>
        <td>Pneu</td>
        <td><input type="number" name="pneu" id="pneu" placeholder="ex:123"></td>
    </tr>
    <tr>
        <td>Óleo</td>
        <td><input type="number" name="oleo" id="oleo" placeholder="ex:123"></td>
    </tr>
    <tr>
        <td>Vela</td>
        <td><input type="number" name="vela" id="vela" placeholder="ex:123"></td>
    </tr> 
 
</table> <br>
<input type="submit" value="Enviar">

</form>
 
</body>
</html>