<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="principal.css">
    
</head>
<body>
    <h1>Oficina o Chicão <img src="img/imgOficina.png" alt=""></h1>
<form action="processar.php" method="post">
<hr>
<table>
    <tr>
        <th>Item</th>
        <th>Quantidade</th>
    </tr>
    <tr>
        <td>Pneu</td>
        <td><input type="number" name="pneu" id="pneu" min="0" value="0" placeholder="ex:123"></td>
    </tr>
    <tr>
        <td>Óleo</td>
        <td><input type="number" name="oleo" id="oleo" min="0" value="0" placeholder="ex:123"></td>
    </tr>
    <tr>
        <td>Vela</td>
        <td><input type="number" name="vela" id="vela" min="0" value="0" placeholder="ex:123"></td>
    </tr> 
</table>
    <hr>

    <tr>
        <dt>Como você nos achou?</dt>
        <dt>
            <select name="achar" id="achar" size="1">
                <option value="a">Sou cliente</option>
                <option value="b">Anúncio de TV</option>
                <option value="c">Telefone</option>
                <option value="d">Boca a boca</option>  
            </select>
        </dt>
    </tr>
 <br>
<input type="submit" value="Enviar">

</form>
 
</body>
</html>