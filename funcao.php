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

    #funcao com  multiplos argumentos
    function subtrai(){
        $p = func_get_args();
        $tot = func_num_args();
        $s = 0;
        for($i=0; $i< $tot;$i++ ){
            if($i==0) {
                $s = $p[$i] ;
            }
            else{
                $s = $s - $p[$i];

            }
        }
        return $s;
    }
    $resp = subtrai(100,10,5);

    echo $resp;

    ?>
</div>

</body>
</html>