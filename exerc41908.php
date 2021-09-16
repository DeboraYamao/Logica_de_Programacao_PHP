<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--para definir a linguaguem utf-8 obrigatorio-->
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Reajuste Salarial">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exerc41908.php">
        <title>Salário</title>
    </head>
    <nav>
        <!--contrutor de links "a", http reference poder ser site "Home" o que vai aparecer neste link-->
            <a href="exerc41908.php" title="Home">Home</a>
        </nav>
    <body>
        <!--título-->
        <header>
        <!--título até h7 quanto maior menor a letra-->
            <h1>Reajuste Salarial</h1>
            <hr/>
        </header>

        <!--menu-->
        <main>
        <!--parte principal-->
            <center><h1>Aplicativo Reajuste Salarial</h1></center>
            <br/><br/>
            <!--form a primeira ação action/ método POST=junto com a requisição GET=junto com a URL-->
            <form action="exerc41908.php" method="POST">
                <!--label=rótulo do campo-->
                <label> Digite o salário:</label><br/>
                <!--modo de entrada text/tell/date, não pode esquecer de dar um nome-->
                <!--required = validação do campo-->
                <input type="number" name="salario" required/><br/>
                <!--submit=botão, value=escrito do botão-->
                <input type="submit" value="Calcular"/>
            </form>
            <?php
                if(isset($_POST['salario'])){
                    $salario = $_POST['salario'];
                   
                    if ($salario <= 280){
                        echo "<hr/>";
                        $sal1 = $salario * 1.2;
                        $reaj1 = $sal1 - $salario;
                        echo "<h3>O seu salário atual de R$$salario será reajustado em 20%";
                        echo "<br>O aumento será de R$$reaj1 e passará a ser R$$sal1";

                    }elseif ($salario > 280 && $salario<=700){
                        $sal1 = $salario * 1.15;
                        $reaj1 = $sal1 - $salario;
                        echo "<h3>O seu salário atual de R$$salario será reajustado em 15%";
                        echo "<br>O aumento será de R$$reaj1 e passará a ser R$$sal1";
                    }elseif ($salario > 700 && $salario<=1500){
                        $sal1 = $salario * 1.1;
                        $reaj1 = $sal1 - $salario;
                        echo "<h3>O seu salário atual de R$$salario será reajustado em 10%";
                        echo "<br>O aumento será de R$$reaj1 e passará a ser R$$sal1";
                    }elseif ($salario > 1500){
                        $sal1 = $salario * 1.05;
                        $reaj1 = $sal1 - $salario;
                        echo "<h3>O seu salário atual de R$$salario será reajustado em 5%";
                        echo "<br>O aumento será de R$$reaj1 e passará a ser R$$sal1";
                    }
                }
                else{
                    echo "<br><br>Por favor digite o salário!</b>";
                }
            ?>
        </main>
        <footer>
        <!--dado rodapé-->
            <p><br/>Desenvolvido pela Débora Yamao</p>
        </footer>
    </body>
</html>