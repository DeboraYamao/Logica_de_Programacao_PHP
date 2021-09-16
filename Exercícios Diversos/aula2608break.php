<!DOCTYPE html>
<html lang="pt-br">
<main>
    <center><h1>Aplicativo Numérico</h1></center>
    <br/><br/>
    <form action="aula2608break.php" method="POST">
        <label> Digite o primeiro número:</label><br/>
        <input type="number" name="n1" required/><br/>
        <label><br/> Digite o segundo número:</label><br/>
        <input type="number" name="n2" required/><br/>
        <input type="submit" value="Apresentar"/>
    </form>
    <hr>
    <?php
        if(isset($_POST['n1'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            
            if($n1<$n2){
                for($i=$n1;$i<=$n2;$i++){
                    echo $i."<br/>";
                }
            }else{
                for($i=$n2;$i<=$n1;$i++){
                    echo $i. "<br>";
                }
            }
        }
        else {
            echo " ";
        }
    ?>
    <hr>
</main>
<footer>
<p>Desenvolvido pela <b>Débora Yamao</b></p>
</footer>
</html>