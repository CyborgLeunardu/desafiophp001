<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php $numero = $_GET["numero"];
        $antecessor = $_GET["numero"] - 1;
        $sucessor = $_GET["numero"] + 1;
        echo "<p>O número escolhido foi <b>$numero</b> </p>";
        echo "<p>O seu <i>antecessor</i> é $antecessor</p>";
        echo "<p>O seu <i>sucessor</i> é $sucessor</p>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
        </form>
    </main>
</body>

</html>