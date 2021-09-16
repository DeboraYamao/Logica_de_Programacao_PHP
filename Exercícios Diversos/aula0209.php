<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Nome">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="aula0209.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Nome</title>
    </head>
    <body>
        <nav>
            <a href="aula0209.php" title="Home">Home</a>
        </nav>
        <header>
            <h1>Nome</h1>
            <hr/>
        </header>        
        
        <main>
            <center><h1>Aplicativo Nome</h1></center>
            <br/><br/>
            <form action="aula0209.php" method="POST">
                <label> Escreva o nome: </label>
                <input type="text" name="nome" required class="form-control"/><br/><br/>
                <input type="submit" value="Apresentar" class="btn btn-success"><br/><br/>
            </form>
            <hr>
            <?php
                if(isset($_POST['nome'])){
                    $nome = $_POST['nome'];

                        for($i=1;$i<10;$i++){
                        echo "$nome <br/>";
                        }

                }
            ?>
            <hr>
        </main>
<footer>
<p>Desenvolvido pela <b>Débora Yamao</b></p>
</footer>
</html>