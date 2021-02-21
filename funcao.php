<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    #função sem retorno
    function soma($a,$b){
        $r = $a+$b;
        echo "$r <br>";
    }
    soma(7,8);
    soma(2,2);

    #função com retorno
    function multiplica($a,$b){
        return $a *$b;
    }
    $r = multiplica(10,7);


    ?>
</div>

</body>
</html>