<?php
include_once '../components/header.php';
?>
<link href="../css_code/style.css" rel="stylesheet" type="text/css">

<div class="mbajtesi-popup">


    <div class="popup" id="popup" >
        
        <img src="../images/tick-insert.png">
        <h2>Sukses!</h2>
        <p>Faleminderit që na kontaktuat</p>
        <button type="button" onclick="closeMSG()" >Kthehu tek faqja</button>
    </div>


</div>

<?php
include_once '../components/footer.php';
?>

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
    top: 43%;
    left: 35%;
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
    margin-top : 50px ;
    padding: 10px 0;
    background: green;
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


function closeMSG(){
    
    window.location.href = '../php_code/faqja.php';
}

</script> 