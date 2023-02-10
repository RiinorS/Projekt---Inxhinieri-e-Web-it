
<?php 

require_once '../phpfaza2/ProductsMapper.php';
$products = new ProductsMapper;
if(isset($_POST['submit'])){
    $products->insert($_POST);
}
?>

<div>

    <form method="POST">  
        Foto :
         <input type="file" name="foto" >
        <br>

        Titulli:

        <input type="text" name="titulli">
        <br>

        Pershkrimi:
        <input type="text" name="pershkrimi" >
        <br>

        Cmimi:
        <input type="text" name="cmimi">
        <br>

        <input type="submit" name="submit" value="Ruaj">

    </form>


</div>