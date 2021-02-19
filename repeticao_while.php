<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estruturas condicionais</title>
</head>
<body><div>
<?php
echo "<h2> Contagem</h2>";
    $c = 1;
    while($c < 10){
        echo "$c<br>";
        $c++;
    };
echo  "<h2>Contagem regressiva</h2>";
    $c = 10;
    while ($c>=1){
        echo "$c<br>";
        $c--;

    }
?>
</div>

</body>
</html>