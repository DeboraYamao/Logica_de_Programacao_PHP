<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Aplicativo Tabuada">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="aula0209tabuada.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tabuada</title>
    </head>
    <body>
        <nav>
            <a href="aula0209tabuada.php" title="Home">Home</a>
        </nav>
        <header>
            <h1>Tabuada</h1>
            <hr/>
        </header>        
        
        <main>
            <center><h1>Aplicativo Tabuada</h1></center>
            <br/><br/>
            <form action="aula0209tabuada.php" method="POST">
                <label> Exibir a tabuada de :</label>
                <input type="number" name="num" required class="form-control"/><br/><br/>
                <input type="submit" value="Apresentar" class="btn btn-success"><br/><br/>
            </form>
            <hr>
            <?php
                if(isset($_POST['num'])){
                    $num = $_POST['num'];
                    if($num>0 && $num<=10){
                        echo "Tabuada: ".$num."<br/>";
                        for($i=1;$i<=10;$i++){
                            echo $num." x ".$i." = ".$num*$i."<br/>";
                        }
                    }else{
                        echo "<script language='javascript' type='text/javascript'>
                    alert('Só serão aceitos números de 1 a 10');
                    window.location.href='aula0209tabuada.php';
                    </script>";
                    }
                }
            ?>
            <hr>
        </main>
<footer>
<p>Desenvolvido pela <b>Débora Yamao</b></p>
</footer>
</html>