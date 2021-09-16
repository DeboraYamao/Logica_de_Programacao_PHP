<?php
    $a = 8;
    $b = 8;
    if($a>$b){
    //abrir a chave para delimitar o cálculo
        echo "A é maior que B.";
        $b = $a;
        echo $b;
    }
    //usar o elseif quantas vezes forem necessárias e no último SEMPRE usar else
    elseif($a == $b) {
        echo "A é igual que B.";
    }
    else {
        echo "B é maio que A.";
    }
?>