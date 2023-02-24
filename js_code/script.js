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

//function validimiKycuni(){

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

function validimiRegjistohuni(){



    const regjEmri = document.getElementById('email_regjistrohuni').value;
    const regjMbiemri = document.getElementById('perdoruesi_regjistrohuni').value;
    const regjFjalekalimi = document.getElementById('fjalekalimi_regjistrohuni').value;

    // emri te kete te pakten 3 shkronja

    var regEm = /^[a-zA-Z]{3,}$/;

    var regexEmri = regEm.test(regjEmri);

    if(!regexEmri){
        alert("Ju lutem kontrolloni që emri të përmbajë minimum 3 shkronja!");
    }


    // mbiemri te kete te pakten 3 shkronja


    var regMb = /^[a-zA-Z]{3,}$/;

    var regex_Mbiemri = regMb.test(regjMbiemri);

    if(!regex_Mbiemri){
        alert("Ju lutem kontrolloni që mbiemri të përmbajë minimum 3 shkronja!");
    }


    // fjalekalimi duhet te kete minimum 5 karaktere dhe te permbaje 1 numer

    var regFjalekalimi = /^[a-zA-Z]{3,}.*\d/;

    var regex_Fjalekalimi = regFjalekalimi.test(regjFjalekalimi);

    if(!regex_Fjalekalimi){
        alert("Ju lutem kontrolloni që fjalëkalimi të përmbajë minimum 3 shkronja dhe te paktën 1 numer!");
    }

}








   



    // validimi i kontaktit


function kontakti(){

    const perdoruesi_kontakto = document.getElementById('perdoruesi_kontakto').value;
    const email_kontakto = document.getElementById('email_kontakto').value;
    const numri_kontakto = document.getElementById('numri_kontakto').value;
    const mesazhi_kontakto = document.getElementById('mesazhi_kontakto').value;


    // perdoruesi duhet te jete me minimum 3 karaktere


    var regPerdoruesi = /^[a-zA-Z]{3,}$/;

    var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_kontakto);

    if(!regex_Perdoruesi){
        alert("Ju lutem kontrolloni që emri të përmbajë minimum 3 shkronja!");
    }



    

    // email-a duhet   te permbaje '@' dhe te perfundoje me  'com' ose 'net'

    var regEm = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|net)$/;


    var regex_Email = regEm.test(email_kontakto);

    if(!regex_Email){
        alert("Ju lutem kontrolloni që email-a të përmbajë @ dhe të përfundojë me  'com' ose 'net'!");
    }


    

   

    if(numri_kontakto.length ===0){
        alert("Ju lutem kontrolloni që numri mos të jetë i zbrazët!");

    }

   
   

    if(mesazhi_kontakto.length ===0){
        alert("Ju lutem kontrolloni që mesazhi mos të jetë i zbrazët!");
    }


}

