


<?php include_once("models/header.php");

?>
<?php 
session_start();
if(isset($_SESSION["nome"], )){
   $nome = $_SESSION["nome"];
}

if(isset($_POST["marca"])){
    $marca = (string)($_POST["marca"]);
    $cor = (string)($_POST["cor"]);
    $tetoSolar = isset($_POST["teto-solar"]);
    $aro = intval($_POST["aro"]);


}

?>

 
<div>
<form action="" method="POST">
        <h3>escolha os atributos do seu carro</h3>

        <label for="marca">marca do carro</label>
        <select name="marca" id="">
            <option value="bmw">bmw</option>
            <option value="mercedes">mercedes</option>
            <option value="ferrari">ferrari</option>
        </select> <br>

        <label for="cor"> cor do carro</label> 
        <select name="cor" id="">
            <option value="branco">branco</option>
            <option value="preto">preto</option>
            <option value="prata">prata</option>
        </select> <br>

       <label for="teto-solar">teto Solar</label> 
       <select name="teto-solar" id="">
        <option value="sim">Sim</option>
        <option value="não">não</option>
       </select> <br>

        <label for="aro">aro da roda</label>
        <select  name="aro" id=""> 
            <option value="16">16</option>
            <option value="18">18</option>
            <option value="21">21</option>
            </select> <br>

        <input type="submit" name= "pedido" value="Pedir" style="background-color: green; color:bisque; border-radius: 10px">


    </form>
    <?php if(isset($_POST["marca"])){?>
        <h4>obrigado por fazer seu pedido sr.<?php echo $nome;?></h4>
        <p>seu pedido foi confirmado <?php echo "seu carro da marca $marca e da cor $cor do aro $aro, esta sendo produzido"; ?></p>

   <?php } ?>

</div>
   
    
        
