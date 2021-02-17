<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estruturas condicionais</title>
</head>
<body>
<?php
$a = isset($_GET["ano"])?$_GET["ano"]:1990;
$i = date("Y") - $a;
echo "Você nasceu em $a e tera $i<br>";

if($i >=18){
    $v = "Já pode votar";
    $d= " Já pode dirigir";
}
else{
    $v= "não pode votar";
    $d = "não pode dirigir";
}
echo "com essa idade você $v e tambem $d";

?>
</body>
</html>