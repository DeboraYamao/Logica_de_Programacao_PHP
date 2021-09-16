<?php
//for
    for($i=1;$i<5;$i++){
        echo "Nome".$i."<input type='text' name='$i'/><br/>";
    }
    echo "<hr>";
    $vetor = array(1,2,3,4,5);
    for($i=0;$i<5;$i++){
        $item = $vetor[$i];
        echo $item."<br/>";
    }
    echo "<hr>";
//foreach
    $vetor = array(1,2,3,4,5);
    foreach($vetor as $item){
        echo $item."<br/>";
    }
    echo "<hr>";
//while
    $contador = 0;
    while($contador < 10){
        echo $contador."<br/>";
        $contador++;
    }
    echo "<hr>";
//endwhile
    $i = 1;
    while($i <= 10):
        echo $i."<br/>";
        $i++;
    endwhile;
    echo "<hr>";
//do while = faça isso enquanto for isso, por isso while no final
    $i = 1;
    do{
        echo $i."<br/>";
        $i++;
    }while($i<15);
    echo "<hr>";
//break
    $i = 0;
    while(true){
        if($i == 5){
            break;
     }
     echo $i."<br/>";
     $i++;
    }
    echo "<hr>";
    $i = 1;
    while(true){
        if($i == 21){
            break;
     }
     echo $i." ";
     $i++;

    }
    echo "<br/>";
    echo "<hr>";
    $i = 1;
    while(true){
        if($i == 21){
            break;
     }
     echo $i."<br/>";
     $i++;
    }
    echo "<hr>";
?>