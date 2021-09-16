<?php
//duas formar de programar o array
    $a = array(1,2,3,4);
    $b = [5,6,7,8];
    print_r($a);
    echo "</br>";
    print_r($b);
    
    echo "<hr>";
//Arrays Associativos
    $a = array(
        "chave1" => 1,
        "chave2" => "PHP",
        "chave" => false
    );
    print_r($a);

    echo "<hr>";
//Arrays Multidimensionais = matriz
    $a = array(
        array("Primeiro", "Segundo"),
        array("Terceiro", "Quarto")
    );
    print_r($a);
    echo "</br>";
    print_r($a[0]);
    echo "</br>";
    print_r($a[1]);
    echo "</br>";
    print_r($a[0][1]); //para imprimir somente a segunda posição do primeiro array
    echo "</br>";
    print_r($a[1][0]);
    echo "</br>";
    echo $a[1][0]." ".$a[1][1]." ".$a[0][0]." ".$a[0][1];
    
    echo "<hr>";
//Contando os elementos de um array
    $numeros = [1,2,700,13,6,78,100,212,15,2,3,1000,412,6];
    echo count($numeros);

    echo "<hr>";
//Adicionando um valor dinamicamente em um array
    $cores = array();
    $cores[] = "Azul";
    $cores[] = "Vermelho";
    $cores[] = "Verde";
    print_r($cores);

    echo "<hr>";
//novo exemplo
    $arr=array("primeiro valor","segundo valor","terceiro valor");
    echo "Valor inicial da minha array é:<br>";
    print_r($arr);
    echo "<br/><br/>";

    $arr[] = "quarto valor";
    $arr[] = "quinto valor";

    echo "Agora a nossa array é:<br/>";
    print_r($arr);

    echo "<hr/>";
//Acessando as posições de um array
    $cores = array(
        "chave1" => "Sim",
        "chave2" => "Não"
    );
    print_r($cores);
    echo "<br>";
    echo $cores["chave1"];
    //só se consegue imprimir um array associativo pelo "nome" associado. não consegue usar número da posição

    echo "<hr>";
//Exemplo 1
    $array = array(1,2,3,4,5);
    echo $array[0];
    echo "<br/>";
    echo $array[2];
    echo "<br/>";
    echo $array[4];

    echo "<hr>";
//Exemplo 2
        $array = array(
        "chave1" => 1,
        "chave2" => "PHP",
        "chave3" => "Array",
        );
    echo $array["chave2"];
    echo "<br/>";
    echo $array["chave3"];

    echo "<hr>";
//Exemplo 3
    $arr=array("nome"=>"Rafael","sobrenome"=>"Marques","idade"=>"25");
    print_r($arr);

    echo "<br/><br/>";
    echo "Nome: <b>".$arr["nome"]."</b><br/>";
    echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
    echo "Idade: <b>".$arr["idade"]."</b><br/>";
    
    echo "<hr>";
//Percorrendo um array
    $cores = array("azul", "vermelho", "amarelo", "verde");
    print_r($cores);
    echo "<br/>";
    foreach($cores as $value){
        echo "$value<br/>";
    }
    echo "<hr>";
//Percorrendo um array multidimencional associativo
    $funcionarios = array(
        array("nome"=>"Alex","idade"=>"21","salario"=>1285.27,"ativo"=>true),
        array("nome"=>"Emerson","idade"=>"35","salario"=>3885.27,"ativo"=>false),
        array("nome"=>"Osvaldo","idade"=>"54","salario"=>5285.27,"ativo"=>true),
    );
    
    $bonificacao = 10;

    foreach($funcionarios as $funcionario){
        if($funcionario["ativo"]){ //if para verificar se na posição funcionario "tem algo"
            $funcionario["salario"]+=$funcionario["salario"]*($bonificacao/100);
            echo "Funcionario: {$funcionario['nome']}-{$funcionario['salario']}\n";//"\n" significa "fim de linha"
        }else{
            echo "Funcionario: {$funcionario['nome']}-INATIVO\n";
        }
    }echo "<hr>";


?>