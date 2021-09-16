<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--para definir a linguaguem utf-8 obrigatorio-->
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Número Par ou Ímpar">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exerc31908.php">
        <title>Números</title>
    </head>
    <nav>
        <!--contrutor de links "a", http reference poder ser site "Home" o que vai aparecer neste link-->
            <a href="exerc31908.php" title="Home">Home</a>
        </nav>
    <body>
        <!--título-->
        <header>
        <!--título até h7 quanto maior menor a letra-->
            <h1>Número Par ou Ímpar</h1>
            <hr/>
        </header>

        <!--menu-->
        <main>
        <!--parte principal-->
            <center><h1>Aplicativo Número Par ou Ímpar</h1></center>
            <br/><br/>
            <!--form a primeira ação action/ método POST=junto com a requisição GET=junto com a URL-->
            <form action="exerc31908.php" method="POST">
                <!--label=rótulo do campo-->
                <label> Digite um número </label><br/>
                <!--modo de entrada text/tell/date, não pode esquecer de dar um nome-->
                <!--required = validação do campo-->
                <input type="number" name="n1" required/><br/>
                <!--submit=botão, value=escrito do botão-->
                <input type="submit" value="Par ou Ímpar"/>
            </form>
            <?php
                if(isset($_POST['n1'])){
                    $n1 = $_POST['n1'];
                    $num = $n1 % 2;
                   
                    if ($num==0){
                        echo "<hr/>";
                        echo "<h3>O número $n1 é PAR!";
                    }else{
                        echo "<hr/>";
                        echo "<h3>O número $n1 é ÍMPAR!";
                    }
                }
                else{
                    echo "<br><br>Por favor digite um número!</b>";
                }
            ?>
        </main>
        <footer>
        <!--dado rodapé-->
            <p><br/>Desenvolvido pela Débora Yamao</p>
        </footer>
    </body>
</html>