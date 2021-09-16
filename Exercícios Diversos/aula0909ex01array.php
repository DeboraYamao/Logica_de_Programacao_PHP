<?php
    $carros = array("Gol","Voyage","Onix","hb20","Spacefox");
    
    print_r ($carros);
    echo "<br/>";
    echo("Carro na posição 3: ".$carros[2])."<br/>";
    echo "<hr>";
    $carros[] = "Celta";
    $carros[] = "SW4";
    $carros[] = "Kicks";
    $carros[] = "Fit";
    $carros[] = "Argo";
    print_r ($carros);
    echo "<br/>";
    echo("Carro na posição 8: ".$carros[7]);
        
    echo "<hr>";
    echo "<br/>";

    $pais = array("BRA" => "Brasil", "EUA" => "Estados Unidos", "ING" => "Inglaterra");
    print_r ($pais);
    echo "<br/>";
    echo("País na posição 3: ".$pais["ING"]);
?>