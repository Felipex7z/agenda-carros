
<?php 


if(isset($_POST["nome"], ) ){
    session_start();
$_SESSION['nome'] = $_POST["nome"];
$_SESSION['idade'] = intval($_POST["idade"]);
$idade = $_POST["idade"];
$anosfaltando = 18 - $idade;
}




?>

<?php include_once("models/header.php");?>

<div><form action="" method="post">
    <h3>preencha os dados para agendar seu carro</h3>

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="">

    <label for="idade">Idade</label>
    <input type="number" name="idade" id="">
    <input type="submit" value="Enviar">
    <?php 
if (isset($idade) && $idade < 18) {
    echo "Erro: vc deve ter no minimo 18 anos volte daqui a $anosfaltando anos";
}elseif($_SERVER["REQUEST_METHOD"] == "POST" ){
    header("Location: agenda.php");
}


?>


</form></div>







<?php 
include_once("models/footer.php");
?>


 


   

