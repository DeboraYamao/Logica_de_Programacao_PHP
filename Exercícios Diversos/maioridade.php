<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--para definir a linguaguem utf-8 obrigatorio-->
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Maioridade">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="maioridade.php">
        <title>Maioridade</title>
    </head>
    <nav>
        <!--contrutor de links "a", http reference poder ser site "Home" o que vai aparecer neste link-->
            <a href="maioridade.php" title="Home">Home</a>
        </nav>
    <body>
        <!--título-->
        <header>
        <!--título até h7 quanto maior menor a letra-->
            <h1>Maioridade</h1>
            <hr/>
        </header>

        <!--menu-->
        <main>
        <!--parte principal-->
            <center><h1>Aplicativo Maioridade</h1></center>
            <br/><br/>
            <!--form a primeira ação action/ método POST=junto com a requisição GET=junto com a URL-->
            <form action="maioridade.php" method="POST">
                <!--label=rótulo do campo-->
                <label> Digite seu nome </label><br/>
                <!--modo de entrada text/tell/date, não pode esquecer de dar um nome-->
                <!--required = validação do campo-->
                <input type="text" name="nome" required/><br/>
                <label> Digite sua idade </label><br/>
                <input type="number" name="idade" required/><br/>
                <!--submit=botão, value=escrito do botão-->
                <input type="submit" value="Mostrar"/>
            </form>
            <?php
                if(isset($_POST['nome'])){
                    $nome = $_POST['nome'];
                    $idade = $_POST['idade'];
                    if ($idade>=18){
                        echo "<br><b>$nome</b>, é maior de idade, tem <b>$idade</b> anos";
                    }
                    else {
                        echo "<br><b>$nome</b>, não é maior de idade, tem <b>$idade</b> anos";
                    }
                    
                }
                else{
                    echo "<br><br>Por favor digite o nome e a idade</b>";
                }
            ?>
        </main>
        <footer>
        <!--dado rodapé-->
            <p>Desenvolvido pela Débora Yamao</p>
        </footer>
    </body>
</html>