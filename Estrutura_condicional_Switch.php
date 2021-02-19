<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estruturas condicionais</title>
</head>
<body>
<?php
    $n = isset($_GET['num'])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($o){
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ^ 3;
            break;
        case 3:
            $r = sqrt($n);
            break;
    }
    echo "<h2> o resultado da operação realizada foi $r<br></h2>"

?>
<a href="Estrutura_concicional_Switch.html">Voltar</a>
</body>
</html>