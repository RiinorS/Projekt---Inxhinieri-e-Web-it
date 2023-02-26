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
  document.getElementById("kontakt-form").addEventListener("submit", function(event) {


    const perdoruesi_kontakto = document.getElementById('perdoruesi_kontakto').value;
    const email_kontakto = document.getElementById('email_kontakto').value;
    const numri_kontakto = document.getElementById('numri_kontakto').value;
    const mesazhi_kontakto = document.getElementById('mesazhi_kontakto').value;

    if(perdoruesi_kontakto.length ===0){
        alert("Ju lutem kontrolloni që emri të mos të jetë i zbrazët!!");
        event.preventDefault(); 

    }

    // email-a duhet   te permbaje '@' dhe te perfundoje me  'com' ose 'net'

    var regEm = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|net)$/;


    var regex_Email = regEm.test(email_kontakto);

    if(!regex_Email){
        alert("Ju lutem kontrolloni që email-a të përmbajë @ dhe të përfundojë me  'com' ose 'net'!");
        event.preventDefault(); 

    }


    if(numri_kontakto.length ===0){
        alert("Ju lutem kontrolloni që numri mos të jetë i zbrazët!");
        event.preventDefault(); 


    }

   
    if(mesazhi_kontakto.length ===0){
        alert("Ju lutem kontrolloni që mesazhi mos të jetë i zbrazët!");
        event.preventDefault(); 

    }
  });

}

function validimiblejTani(){
    document.getElementById("porosi-form").addEventListener("submit", function(event) {
        var emri = document.getElementById("emri_blej").value;
        var mbiemri = document.getElementById("mbiemri_blej").value;
        var adresa = document.getElementById("adresa_blej").value;
        var komuna = document.getElementById("komuna_blej").value;
        var numri = document.getElementById("numri_blej").value;
        var produkti = document.getElementById("produkti_blej").value;

        if (emri == "") {
          alert("Ju lutem kontrolloni që emri mos të jetë i zbrazët!");
          event.preventDefault(); 
        }
        if (mbiemri == "") {
          alert("Ju lutem kontrolloni që mbiemri mos të jetë i zbrazët!");
          event.preventDefault(); 
        }  
        if (adresa == "") {
          alert("Ju lutem kontrolloni që adresa mos të jetë e zbrazët!");
          event.preventDefault(); 
        }  
        if (komuna == "") {
          alert("Ju lutem kontrolloni që komuna mos të jetë e zbrazët!");
          event.preventDefault(); 
        }  
        if (numri == "") {
          alert("Ju lutem kontrolloni që numri mos të jetë i zbrazët!");
          event.preventDefault(); 
        }  
        if (produkti == "") {
          alert("Ju lutem kontrolloni që produkti të cilin doni ta porositni mos të jetë i zbrazët!");
          event.preventDefault(); 
        }    
      });
}


function validimiShtoProdukt(){

document.getElementById("shto-form").addEventListener("submit", function(event) {
    var foto = document.getElementById("shto-foto").value;
    var titulli = document.getElementById("shto-titull").value;
    var pershkrimi = document.getElementById("shto-pershkrim").value;
    var cmimi = document.getElementById("shto-cmim").value;
    

    if (foto == "") {
        alert("Ju lutem kontrolloni që foto mos të jetë e zbrazët!");
      event.preventDefault(); 
    }

    if (titulli == "") {
        alert("Ju lutem kontrolloni që titulli mos të jetë i zbrazët!");
      event.preventDefault(); 
    }

    if (pershkrimi == "") {
        alert("Ju lutem kontrolloni që përshkrimi mos të jetë i zbrazët!");
      event.preventDefault(); 
    }

    if (cmimi == "") {
        alert("Ju lutem kontrolloni që cmimi mos të jetë i zbrazët!");
      event.preventDefault(); 
    }

  });
}