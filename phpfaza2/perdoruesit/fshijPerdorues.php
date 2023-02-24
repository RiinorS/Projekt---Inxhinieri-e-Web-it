<?php
include_once '../phpfaza2/dbconnect/UserMapper.php';
include_once '../components/menu-anash.php';


if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userId);
    
}

?>

<div class="mbajtesi-popup">


    <div class="popup" id="popup" >
        
        <img src="../images/tick-delete.png">
        <h2>Sukses!</h2>
        <p>Ju keni fshirë të dhënat e përdoruesit</p>
        <button type="button" onclick="closeFshijePopup()" >Vazhdo</button>
    </div>


</div>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.mbajtesi-popup{
    width: 100%;
    height: 100vh;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
}

.popup{
    width: 400px;
    background: white;
    border-radius: 6px;
    position: absolute;
    top: 30%;
    left: 43%;
    text-align: center;
    padding: 0 30px 30px ;
    color: #333;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}




.popup img {
    width: 100px;
   
    margin-top: -50px ;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}


.popup h2 {
    font-size : 38px;
    font-weight : 500;
    margin: 30px 0 10px;
    color: black;
}


.popup button {
    width: 100%;
    margin-top : 43px ;
    padding: 10px 0;
    background: red;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

}

</style>

<script>


function closeFshijePopup(){
    
    window.location.href = 'phpfaza2/perdoruesit/perdoruesit.php';
}

</script>