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

// function validimiRegjistohuni(){



//     const regjEmri = document.getElementById('email_regjistrohuni').value;
//     const regjMbiemri = document.getElementById('perdoruesi_regjistrohuni').value;
//     const regjFjalekalimi = document.getElementById('fjalekalimi_regjistrohuni').value;

//     // emri te kete te pakten 3 shkronja

//     var regEm = /^[a-zA-Z]{3,}$/;

//     var regexEmri = regEm.test(regjEmri);

//     if(!regexEmri){
//         alert("Ju lutem kontrolloni që emri të përmbajë minimum 3 shkronja!");
//     }


//     // mbiemri te kete te pakten 3 shkronja


//     var regMb = /^[a-zA-Z]{3,}$/;

//     var regex_Mbiemri = regMb.test(regjMbiemri);

//     if(!regex_Mbiemri){
//         alert("Ju lutem kontrolloni që mbiemri të përmbajë minimum 3 shkronja!");
//     }


//     // fjalekalimi duhet te kete minimum 5 karaktere dhe te permbaje 1 numer

//     var regFjalekalimi = /^[a-zA-Z]{3,}.*\d/;

//      var regex_Fjalekalimi = regFjalekalimi.test(regjFjalekalimi);

//     if(!regex_Fjalekalimi){
//         alert("Ju lutem kontrolloni që fjalëkalimi të përmbajë minimum 3 shkronja dhe te paktën 1 numer!");
//     }

// }


function validimiRegjistohuni(){
    
    // const regjEmri = document.getElementById('email_regjistrohuni').value;
    // const regjMbiemri = document.getElementById('perdoruesi_regjistrohuni').value;
    // const regjFjalekalimi = document.getElementById('fjalekalimi_regjistrohuni').value;



    // const EmriRegex = /^[a-zA-Z]{3,}$/;
    // const MbiemriRegex = /^[a-zA-Z]{3,}$/;
    // const FjalekalimiRegex = /^[a-zA-Z]{3,}.*\d/;


    // var emri = document.getElementById('register-username').value;
    // //var emriRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    // var emriRegex = /^[a-zA-Z]{3,}$/;


    // var mbiemri = document.getElementById('register-lastname').value;

    // var mbiemriRegex = /^[a-zA-Z]{3,}$/;



    // var fjalekalimi = document.getElementById('register-password').value;
    // var fjalekalimiRegex = /^[a-zA-Z]{3,}.*\d/;
    
    //     if (emriRegex.test(emri)) {
    //         alert("Ju lutem kontrolloni që emri të përmbajë minimum 3 shkronja!");
    //     }    
          
    
    //     if (mbiemriRegex.test(mbiemri)) {
    //         alert("Ju lutem kontrolloni që mbiemri të përmbajë minimum 3 shkronja!");
    //     }
        
    //     if (fjalekalimiRegex.test(fjalekalimi)) {
    //         alert("Ju lutem kontrolloni që fjalekalimi të përmbajë minimum 3 karaktere dhe 1 numer !");
    //     }
            

    const usernameInput = document.getElementById("email_regjistrohuni");
  const lastnameInput = document.getElementById("perdoruesi_regjistrohuni");
  const passwordInput = document.getElementById("fjalekalimi_regjistrohuni");

  // regular expressions for input validation
  const usernameRegex = /^[a-zA-Z]+$/;
  const lastnameRegex = /^[a-zA-Z]+$/;
  const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

  // function to validate input using regex and display alert if invalid
  function validateInput(inputElement, regex, errorMessage) {
    const inputValue = inputElement.value.trim();
    if (!regex.test(inputValue)) {
      alert(errorMessage);
      inputElement.focus();
      return false;
    }
    return true;
  }

  // validate form inputs on submit
  document.getElementById("regjistrohuni").addEventListener("submit", function(event) {
    event.preventDefault(); // prevent form submission

    const isUsernameValid = validateInput(usernameInput, usernameRegex, "Emri duhet të përmbajë vetëm shkronja.");
    const isLastnameValid = validateInput(lastnameInput, lastnameRegex, "Mbiemri duhet të përmbajë vetëm shkronja.");
    const isPasswordValid = validateInput(passwordInput, passwordRegex, "Fjalëkalimi duhet të përmbajë të paktën 8 karaktere, një shkronjë të vogël, një shkronjë të madhe dhe një numër.");

    if (isUsernameValid && isLastnameValid && isPasswordValid) {
      // submit form if all inputs are valid
      this.submit();
    }
  });
        
}


    









    
    // const regEmri = /^[a-zA-Z]{3,}$/;
    // const regFjalekalimi = /^[A-Z]+$/;

    // function validoKycuni() {

        

    //     let inputs = document.querySelectorAll("input");
    //     emri = inputs[0].value;
    //     //fjalekalimi = inputs[1].value;

    //     if(regEmri.test(emri) && regFjalekalimi !="") {
    //         return true;
    //     }
    //     return false;

    // }

    // const regMbiemri = /^[a-zA-Z]{3,}$/;

    // function validoRegjistrohuni(){

    //     // let regjEmri  = document.getElementById("email_regjistrohuni");
    //     let regjMbiemri = document.getElementById("perdoruesi_regjistrohuni"); 
    //     //let regjFjalekalimi = document.getElementById("fjalekalimi_regjistrohuni");


    //     if(regEmri.test(emri)   ){
    //         return true;
    //     }
    //     else {
    //         alert("Emri duhet të përmbajë të paktën 3 shkronja");
    //     }



    //     if(regFjalekalimi.test()){
    //         return true;

    //     }
    //     else {

    //     }

    //     if(regMbiemri.test(regjMbiemri)){

    //     }
    //     else {

    //     }

    // }

    


    









    // validimi i kontaktit

    // emri dhe mbiemri te kene te pakten 3 karaktere

// function kontakti(){

//     const perdoruesi_kontakto = document.getElementById('perdoruesi_kontakto').value;
//     const email_kontakto = document.getElementById('email_kontakto').value;
//     const numri_kontakto = document.getElementById('numri_kontakto').value;
//     const mesazhi_kontakto = document.getElementById('mesazhi_kontakto').value;


//     // perdoruesi duhet te jete me minimum 6 karaktere, maksimumi 16 karaktere , duhet te kete te pakten nje numer 
//     // dhe te pakten nje shkronje te madhe


//     var regPerdoruesi = /^(?=.{6,16}$)(?=.*[A-Z])(?=.*[0-9])/;

//     var regex_Perdoruesi = regPerdoruesi.test(perdoruesi_kontakto);

//     if(!regex_Perdoruesi){
//         alert("Ju lutem plotësoni fushën e përdoruesit me të dhëna të sakta!");
//     }



    

//     // email-a duhet te kete minimum 5 karaktere, duhet te permbaje te pakten nje numer, te permbaje '@' dhe te perfundoje me 
//     //   'com' ose 'net'

//     var regEm = /^(?=.{5,})(?=.*[0-9])(?=.*@).*\.(com|net)$/;

//     var regex_Email = regEm.test(email_kontakto);

//     if(!regex_Email){
//         alert("Ju lutem plotësoni fushën e email-it me të dhëna të sakta!");
//     }


    

//     // numri duhet te jete me 9 numra nga 3 here secila 3 numra

//     var regNr = /[0-9]{3}-[0-9]{3}-[0-9]{3}/;

//     var regex_Numri = regNr.test(numri_kontakto);

//     if(!regex_Numri){
//         alert("Ju lutem plotësoni fushën e numrit me të dhëna të sakta!");
//     }


//     // mesazhi duhet te kete minimumi 10 fjale

//     var regMsg = /^\b.{1,}\b(.{1,}\b){9,}$/;

//     var regex_Mesazhi = regMsg.test(mesazhi_kontakto);

//     if(!regex_Mesazhi){
//         alert("Ju lutem plotësoni fushën e mesazhit me të dhëna të sakta!");
//     }


// }

