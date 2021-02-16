
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritimeticos</title>

</head>
<body>
<h1>Operadores Aritimeticos</h1>
<?php
$n1 = 5;
$n2 = 10;
$s = $n1 + $n2;
$m = ($n1 + $n2)/2;
echo " a soma entre $n1 e $n2 é $s";
echo " <br> a subtração entre $n1 e $n2 é  ". ($n1 - $n2);
echo "<br> a multiplicação entre $n1 e $n2 é ".($n1*$n2);
echo "<br> a divisão entre  $n1 e $n2 é ". ($n1/$n2);
echo "<br> a media entre $n1 e $n2 é ".$m;
echo "<br><br> Pegando valores do usuario! ";
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$s = $n1 + $n2;
$m = ($n1 + $n2)/2;

echo " a soma entre $n1 e $n2 é $s";
echo " <br> a subtração entre $n1 e $n2 é  ". ($n1 - $n2);
echo "<br> a multiplicação entre $n1 e $n2 é ".($n1*$n2);
echo "<br> a divisão entre  $n1 e $n2 é ". ($n1/$n2);
echo "<br> a media entre $n1 e $n2 é ".$m;


?>
</body>
</html>