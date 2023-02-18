


<div class="mbajtesi-popup">
    <div class="popup" id="popup" >
        <img src="../images/tick.png">
        <h2>Sukses</h2>
        <p>Ju keni ndryshuar te dhenat e perdoruesit</p>
        <button type="button" onclick="closeDeletePopup()" >Vazhdo</button>
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
    background: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.popup{
    width: 400px;
    background: #fff;
    border-radius: 6px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%) scale(0.1) ;
    text-align: center;
    padding: 0 30px 30px ;
    color: #333;
}

.open-deletepopup{
    top: 50%;
    transform: translate(-50% , -50%) scale(1) ;
}


.popup img {
    width: 100px;
    margin-top: -15%;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.popup h2 {
    font-size : 38px;
    font-weight : 500;
    margin: 30px 0 10px;
}

.popup button {
    width: 100%;
    margin-top : 50px ;
    padding: 10px 0;
    background: #6fd649;
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

let popup = document.getElementById("popup");

function openEditPopup(){
    popup.classList.add("open-editpopup");

}

function closeEditPopup(){
    popup.classList.remove("open-editpopup");
    window.location = 'perdoruesit.php';
}

</script> 