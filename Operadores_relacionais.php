
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula variaveis</title>

</head>
<body>
<h1>Operadores Logicos</h1>
<h2>
<?php

$a = 5;
$b = 10;
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$tipo = $_GET["op"];
echo "foram passados os valores $n1 e $n2<br>";
$r = ($tipo =="s")?$n1 +$n2: $n1*$n2;
echo "o resultado da operação é $r<br>";
echo "Calculando media<br>";
$nota1 =$_GET["n1"];
$nota2 = $_GET["n2"];
$media = $nota1 + $nota2 / 2 >= 6 ? "Aprovado" : "Reprovado";
echo "As notas obtidas foram... $nota1 e $nota2<br>";
echo " a situação do aluno é $media";


/*
$a > $b;
$a>=$b;
$a!=$b;
$a ==$b */
?></h2>

</body>
</html>
