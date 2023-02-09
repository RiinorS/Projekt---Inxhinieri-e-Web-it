var vargu = [
        '../images/hyperXkufje.jpg',
        '../images/mouseRazer.jpg',
        '../images/kase.jpg',
        '../images/ps5controlller.jpg',
        '../images/kgrafike.jpg',
        '../images/jblcharge5.jpg',
        '../images/hyperXkufje.jpg'
];


// var vargu = [
    




// ];

var index = 0;
var koha = 2000;

function krijoSlider(){
    document.getElementById('slider').src = vargu[index]
    index++;

    if(index == vargu.length){
        index = 0;
    }

    setTimeout("krijoSlider()" , koha);

}

krijoSlider();

// validimi i butonit blej tani


function redirect() {
    window.location = 'produktet.php';
}


// validimi per butonat lart kycuni dhe regjistrohuni 




function regjistrohuni(){
    let x = document.getElementById("kycuni");
    let y = document.getElementById("regjistrohuni");
    let z = document.getElementById("butonikr");

    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";


    
}

regjistrohuni();

function kycuni(){

    let x = document.getElementById("kycuni");
    let y = document.getElementById("regjistrohuni");
    let z = document.getElementById("butonikr");


    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0";

}

kycuni();

function validimiKycuni(){

    //const perdoruesi_kycuni = document.getElementById('perdoruesi_kycuni').value;
   // const fjalekalimi_kycuni = document.getElementById('fjalekalimi_kycuni').value;

    // perdoruesi duhet te jete me minimum 6 karaktere, maksimumi 16 karaktere , duhet te kete te pakten nje numer 
    // dhe te pakten nje shkronje te madhe

    // var regPerdoruesi = /^(?=.{6,16}$)(?=.*[A-Z])(?=.*[0-9])/;

    // var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_kycuni);

    // if(!regex_Perdoruesi){
    //     alert("Ju lutem plotësoni fushën e përdoruesit me të dhëna të sakta!");
    // }
    


    // fjalekalimi duhet te kete minimum 8 karaktere, maksimum 20 karaktere, dhe ka karaktere speciale

    //var regFjalekalimi = /^[A-Za-z0-9!@#$%^&*()_]{8,20}$/;

//     var regex_Fjalekalimi = regFjalekalimi.test(fjalekalimi_kycuni);

//     if(!regex_Fjalekalimi){
//         alert("Ju lutem plotësoni fushën e fjalëkalimit me të dhëna të sakta!");
//     }
    
    
// }

// function validimiRegjistohuni(){



//     const email_regjistrohuni = document.getElementById('email_regjistrohuni').value;
//     const perdoruesi_regjistrohuni = document.getElementById('perdoruesi_regjistrohuni').value;
//     const fjalekalimi_regjistrohuni = document.getElementById('fjalekalimi_regjistrohuni').value;

//     // email-a duhet te kete minimum 5 karaktere, duhet te permbaje te pakten nje numer, te permbaje '@' dhe te perfundoje me 
//     //   'com' ose 'net'

//     var regEm = /^(?=.{5,})(?=.*[0-9])(?=.*@).*\.(com|net)$/;

//     var regex_Email = regEm.test(email_regjistrohuni);

//     if(!regex_Email){
//         alert("Ju lutem plotësoni fushën e email-it me të dhëna të sakta!");
//     }



    // perdoruesi duhet te jete me minimum 6 karaktere, maksimumi 16 karaktere , duhet te kete te pakten nje numer 
    // dhe te pakten nje shkronje te madhe


    //var regPerdoruesi = /^(?=.{6,16}$)(?=.*[A-Z])(?=.*[0-9])/;

    // var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_regjistrohuni);

    // if(!regex_Perdoruesi){
    //     alert("Ju lutem plotësoni fushën e përdoruesit me të dhëna të sakta!");
    // }


    // // fjalekalimi duhet te kete minimum 8 karaktere, maksimum 20 karaktere, dhe ka karaktere speciale

    // var regFjalekalimi = /^[A-Za-z0-9!@#$%^&*()_]{8,20}$/;

    // var regex_Fjalekalimi = regFjalekalimi.test(fjalekalimi_regjistrohuni);

    // if(!regex_Fjalekalimi){
    //     alert("Ju lutem plotësoni fushën e fjalëkalimit me të dhëna të sakta!");
    // }

}

    const regPerdoruesi = /^[a-zA-Z0-9]{3,}$/;
    const regFjalekalimi = /^[A-Z]+$/;


    function valido() {

        let inputs = document.querySelectorAll("input");
        username = inputs[0].value;
        password = inputs[1].value;

        if(regPerdoruesi.test(username) && password !="") {
            return true;
        }
        return false;

    }



    









    // validimi i kontaktit

    // emri dhe mbiemri te kene te pakten 3 karaktere

function kontakti(){

    const perdoruesi_kontakto = document.getElementById('perdoruesi_kontakto').value;
    const email_kontakto = document.getElementById('email_kontakto').value;
    const numri_kontakto = document.getElementById('numri_kontakto').value;
    const mesazhi_kontakto = document.getElementById('mesazhi_kontakto').value;


    // perdoruesi duhet te jete me minimum 6 karaktere, maksimumi 16 karaktere , duhet te kete te pakten nje numer 
    // dhe te pakten nje shkronje te madhe


    var regPerdoruesi = /^(?=.{6,16}$)(?=.*[A-Z])(?=.*[0-9])/;

    var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_kontakto);

    if(!regex_Perdoruesi){
        alert("Ju lutem plotësoni fushën e përdoruesit me të dhëna të sakta!");
    }



    

    // email-a duhet te kete minimum 5 karaktere, duhet te permbaje te pakten nje numer, te permbaje '@' dhe te perfundoje me 
    //   'com' ose 'net'

    var regEm = /^(?=.{5,})(?=.*[0-9])(?=.*@).*\.(com|net)$/;

    var regex_Email = regEm.test(email_kontakto);

    if(!regex_Email){
        alert("Ju lutem plotësoni fushën e email-it me të dhëna të sakta!");
    }


    

    // numri duhet te jete me 9 shumra nga 3 here secila 3 numra

    var regNr = /[0-9]{3}-[0-9]{3}-[0-9]{3}/;

    var regex_Numri = regNr.test(numri_kontakto);

    if(!regex_Numri){
        alert("Ju lutem plotësoni fushën e numrit me të dhëna të sakta!");
    }


    // mesazhi duhet te kete minimumi 10 fjale

    var regMsg = /^\b.{1,}\b(.{1,}\b){9,}$/;

    var regex_Mesazhi = regMsg.test(mesazhi_kontakto);

    if(!regex_Mesazhi){
        alert("Ju lutem plotësoni fushën e mesazhit me të dhëna të sakta!");
    }


}
