<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--para definir a linguaguem utf-8 obrigatorio-->
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Maioridade">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="consumo.php">
        <title>Consumo Médio</title>
    </head>
    <nav>
        <!--contrutor de links "a", http reference poder ser site "Home" o que vai aparecer neste link-->
            <a href="consumo.php" title="Home">Home</a>
        </nav>
    <body>
        <!--título-->
        <header>
        <!--título até h7 quanto maior menor a letra-->
            <h1>Consumo Médio</h1>
            <hr/>
        </header>

        <!--menu-->
        <main>
        <!--parte principal-->
            <center><h1>Aplicativo Consumo Médio</h1></center>
            <br/><br/>
            <!--form a primeira ação action/ método POST=junto com a requisição GET=junto com a URL-->
            <form action="consumo.php" method="POST">
                <!--label=rótulo do campo-->
                <label> Digite a distância percorrida </label><br/>
                <!--modo de entrada text/tell/date, não pode esquecer de dar um nome-->
                <!--required = validação do campo-->
                <input type="number" name="dist" required/><br/>
                <label> Digite quantidade de combustível consumido </label><br/>
                <input type="number" name="consumo" required/><br/>
                <!--submit=botão, value=escrito do botão-->
                <input type="submit" value="Calcular"/>
            </form>
            <?php
                if(isset($_POST['dist'])){
                    $dist = $_POST['dist'];
                    $consumo = $_POST['consumo'];
                    $calculo = $dist / $consumo;
                    echo "<hr/>";
                    echo "<h3> O consumo médio foi de $calculo";
                }else{
                    echo "<hr><br>Digite as informações para calcular</b>";
 
            }   
                

            ?>
        </main>
        <footer>
        <!--dado rodapé-->
            <p><br/>Desenvolvido pela Débora Yamao</p>
        </footer>
    </body>
</html>