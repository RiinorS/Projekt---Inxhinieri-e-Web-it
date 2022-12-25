var vargu = [
        './/images//xiaomi.jpg',
        './/images//mouseRazer.jpg',
        './/images//kase.jpg',
        './/images//ps5controlller.jpg',
        './/images//kgrafike.jpg',
        './images//jblcharge5.jpg',
        './/images//hyperXkufje.jpg'
];

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
    window.location = 'produktet.html';
}


// validimi per butonat lart kycuni dhe regjistrohuni 

// var x = document.getElementById("forma-kycuni");
// var y = document.getElementById("forma-regjistrohuni");
// var z = document.getElementById("butonikr");
// let x = document.getElementById("forma-kycuni");
//     let y = document.getElementById("forma-regjistrohuni");
//     let z = document.getElementById("butonikr");


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

// function kycuni(){

//     let x = document.getElementById("forma-kycuni");
//     let y = document.getElementById("forma-regjistrohuni");
//     let z = document.getElementById("butonikr");


//     x.style.left = "50px";
//     y.style.left = "450px";
//     z.style.left = "0";

// }
// kycuni();



function validimiKycuni(){

    const perdoruesi_kycuni = document.getElementById('perdoruesi_kycuni').value;
    const fjalekalimi_kycuni = document.getElementById('fjalekalimi_kycuni').value;

    // perdoruesi duhet te jete me minimum 6 karaktere, maksimumi 16 karaktere , duhet te kete te pakten nje numer 
    // dhe te pakten nje shkronje te madhe

    var regPerdoruesi = /^(?=.{6,16}$)(?=.*[A-Z])(?=.*[0-9])/;

    var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_kycuni);

    if(!regex_Perdoruesi){
        console.log("Ju keni shenuar fushen e perdoruesit gabim!");
    }


    // fjalekalimi duhet te kete minimum 8 karaktere, maksimum 16 karaktere, duhet te kete te pakten nje shkronje te madhe
    // , te pakten nje numer dhe te pakten nje pike  

    var regFjalekaimi = /^(?=.{8,16}$)(?=.*[A-Z])(?=.*[0-9])(?=.*\.)/;

    var regex_Fjalekalimi = regFjalekalimi.test(fjalekalimi_kycuni);

    if(!regex_Fjalekalimi){
        console.log("Ju keni shenuar fushen e fjalekalimit gabim!");
    }


}
validimiKycuni();

function validimiRegjistohuni(){



    const regjistrohuni_email = document.getElementById('regjistrohuni_email').value;
    const perdoruesi_regjistrohuni = document.getElementById('perdoruesi_regjistrohuni').value;
    const fjalekalimi_regjistrohuni = document.getElementById('fjalekalimi_regjistrohuni').value;

    // email-a duhet te kete minimum 5 karaktere, duhet te permbaje te pakten nje Number, te permbaje '@' dhe 'com'

    var regEm = /^(?=.{5,}$)(?=.*[0-9])(?=.*@)(?=.*\.com)/;

    var regex_Email = regEm.test(regjistrohuni_email);

    if(!regjistrohuni_email){
        console.log("Ju keni shenuar fushen e email-it gabim!");
    }


    var regPerdoruesi = /^(?=.{6,16}$)(?=.*[A-Z])(?=.*[0-9])/;

    var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_regjistrohuni);

    if(!regex_Perdoruesi){
        console.log("Ju keni shenuar fushen e perdoruesit gabim!");
    }


    // fjalekalimi duhet te kete minimum 8 karaktere, maksimum 16 karaktere, duhet te kete te pakten nje shkronje te madhe
    // , te pakten nje numer dhe te pakten nje pike  

    var regFjalekaimi = /^(?=.{8,16}$)(?=.*[A-Z])(?=.*[0-9])(?=.*\.)/;

    var regex_Fjalekalimi = regFjalekalimi.test(fjalekalimi_perdoruesi_regjistrohuni);

    if(!regex_Fjalekalimi){
        console.log("Ju keni shenuar fushen e fjalekalimit gabim!");
    }


}



validimiRegjistrohuni();


