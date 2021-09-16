<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Ex.03">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="0209ex03.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tabuada</title>
    </head>
    <body>
        <nav>
            <a href="0209ex03.php" title="Home">Home</a>
        </nav>
        <header>
            <h1>Ex.03</h1>
            <hr/>
        </header>        
        
        <main>
            <center><h1>Aplicativo Ex.03</h1></center>
            <br/><br/>
            <form action="0209ex03.php" method="POST">
                <label> Digite o primeiro número:</label>
                <input type="number" name="num1" required class="form-control"/><br/><br/>
                <label> Digite o segundo número:</label>
                <input type="number" name="num2" required class="form-control"/><br/><br/>
                <input type="submit" value="Apresentar" class="btn btn-success"><br/><br/>
            </form>
            <hr>
            <?php
                if(isset($_POST['num1'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    if($num1<$num2){
                        for($i=$num1;$i<=$num2;$i++){
                            echo "$i <br/>";
                        }
                    }else{
                        for($i=$num1;$i>=$num2;$i--){
                            echo "$i <br/>";
                        }
                        echo " ";
                    }
                }
            ?>
            <hr>
        </main>
<footer>
<p>Desenvolvido pela <b>Débora Yamao</b></p>
</footer>
</html>