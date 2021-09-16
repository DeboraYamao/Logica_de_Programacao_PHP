<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--para definir a linguaguem utf-8 obrigatorio-->
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Maioridade">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exerc21908.php">
        <title>Temperatura</title>
    </head>
    <nav>
        <!--contrutor de links "a", http reference poder ser site "Home" o que vai aparecer neste link-->
            <a href="exerc21908.php" title="Home">Home</a>
        </nav>
    <body>
        <!--título-->
        <header>
        <!--título até h7 quanto maior menor a letra-->
            <h1>Conversão Temperatura</h1>
            <hr/>
        </header>

        <!--menu-->
        <main>
        <!--parte principal-->
            <center><h1>Aplicativo Conversão Temperatura</h1></center>
            <br/><br/>
            <!--form a primeira ação action/ método POST=junto com a requisição GET=junto com a URL-->
            <form action="exerc21908.php" method="POST">
                <!--label=rótulo do campo-->
                <label> Digite a temperatura em graus Fahrenheit </label><br/>
                <!--modo de entrada text/tell/date, não pode esquecer de dar um nome-->
                <!--required = validação do campo-->
                <input type="number" name="t1" required/><br/>
                <!--submit=botão, value=escrito do botão-->
                <input type="submit" value="Converter"/>
            </form>
            <?php
                
                    $t1 = $_POST['t1'];
                    $calculo = number_format((5 * ($t1 - 32) / 9), 2, '.', '');

                    echo "<hr/>";
                    echo "<h3>A temperatura de $t1 graus Fahrenheit é $calculo graus Celsius";

            ?>
        </main>
        <footer>
        <!--dado rodapé-->
            <p><br/>Desenvolvido pela Débora Yamao</p>
        </footer>
    </body>
</html>