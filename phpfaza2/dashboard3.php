<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div  class="menu-anash">

        <div class="brand">
        <img src="../images/dashboard.png" width="30px" height="30px" >&nbsp; Dashboard
        </div>

        
        <li><img src="../images/customers.png" width="22px" height="25px" >&nbsp; <span>Përdoruesit</span></li>
        <li><img src="../images/prod.png" width="22px" height="25px" >&nbsp; <span>Produktet</span>  </li>
        <li><img src="../images/msg.png" width="22px" height="20px" >&nbsp;<span>Mesazhet</span> </li>
        <li><img src="../images/faqja.png" width="22px" height="20px" >&nbsp; <span>Faqja</span>  </li>


      


    </div>

    <div class="mbajtesi">

        <div class="permbajtja">

            


            <div class="kartat">
                    <div class="karta">
                        <div class="kutia">
                            <h1>5000+</h1>
                            <h3>Produkte</h3>
                        </div>

                        <div class="icon">
                            <img src="../images/bag.png" width="70px" height= "70px" >
                        </div>

                    </div>

                    <div class="karta">
                        <div class="kutia">
                            <h1>500+</h1>
                            <h3>Klientë</h3>
                        </div>

                        <div class="icon">
                            <img src="../images/client.png" width="70px" height= "70px" >
                        </div>

                    </div>

                    <div class="karta">
                        <div class="kutia">
                            <h1>1000+</h1>
                            <h3>Porosi</h3>
                        </div>

                        <div class="icon">
                            <img src="../images/delivery.png" width="70px" height= "70px" >
                        </div>

                    </div>

                    <div class="karta">
                        <div class="kutia">
                            <h1>800+</h1>
                            <h3>Vizitorë</h3>
                        </div>

                        <div class="icon">
                           
                         <img src="../images/visit.png" width="70px" height= "70px" >
                        </div>

                    </div>
            </div>

            <div class="permbajtja2">

                <div class="porosite-e-fundit"> 

                    <div class="titulli">
                    
                        <h2>Porositë e fundit</h2>


                    </div>

                    <table>

                        <tr>

                            <th>Klienti</th>
                            <th>Produkti</th>
                            <th>Sasia</th>
                            <th>Totali</th>

                        </tr>

                        <tr>

                            <td>Jona Rrahmani</td>
                            <td>Kamerë GoPro HERO11</td>
                            <td>1</td>
                            <td>749.50 €</td>

                        </tr>

                        <tr>

                            <td>Fazli Thaqi</td>
                            <td>Apple AirPods</td>
                            <td>1</td>
                            <td>259.00 €</td>

                        </tr>

                        <tr>

                            <td>Vesa Rrahmani</td>
                            <td>Kufje JBL</td>
                            <td>2</td>
                            <td>301.50 €</td>

                        </tr>

                        <tr>

                            <td>Yll Shillova</td>
                            <td>Mouse Razer</td>
                            <td>4</td>
                            <td>158.00 €</td>

                        </tr>

                        <tr>

                            <td>Rinor Salihu</td>
                            <td>Fanellë Bad News Eagles</td>
                            <td>2</td>
                            <td>100.00 €</td>

                        </tr>

                    </table>

                </div>



                






                <div class="klientet-e-rinje">

                    <div class="porosite-e-fundit"> 

                        <div class="titulli">
                        <h2>Klientët e rinjë</h2>

                    </div>

                    <table>
                        <tr>
                            <th>Profili</th>
                            <th>Emri</th>
                            <th>Mbiemri</th>

                        </tr>


                        <tr>

                            <td><img src="../images/avatarsh.png" width="25px" height="25px"  ></td>
                            <td>Shpresim</td>
                            <td>Syla</td>

                        </tr>

                        <tr>

                        <td><img src="../images/avatarrion.png" width="25px" height="25px"  ></td>
                            <td>Rion</td>
                            <td>Reqica</td>

                        </tr>

                        <tr>

                        <td><img src="../images/avatare.png" width="25px" height="25px"  ></td>
                            <td>Elion</td>
                            <td>Aliu</td>

                        </tr>

                        <tr>

                        

                    </table>


                </div>

                </div>
               


            </div>
        </div>
    </div>


    



    
</body>
</html>

<style>
*{
    font-family: sans-serif;
}

 /* Navbar matjas */

.menu-anash{
    position:fixed;
    background: black;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    margin-left: -8px;
    margin-top: -8px;
}

.menu-anash .brand {
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: x-large;
    margin-top: 65px;
    margin-bottom: 30px;
}


.menu-anash li {

    font-size: 24px;
    padding: 15px 40px;
    color: white;
    display: flex;
    align-items: center;

}

.menu-anash li:hover {
    background: white;
    color: black;
    cursor: pointer;
}

/* Permbajtja 1 */

.mbajtesi{
    position: fixed;
    right: 0;
    width: 80vw;
    height: 100vh;
}

.mbajtesi .permbajtja {
    position: relative;
    margin-top: -3vh;
    min-height: 102vh;
    background: #f1f1f1;

}

.mbajtesi .permbajtja .kartat {
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.mbajtesi .permbajtja .kartat .karta {
    width: 185px;
    height: 150px;
    background: white;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

h1,h2{
    color: gray;
}

h3{
    color: black;
}

 /* Permbajtja 2 */


.mbajtesi .permbajtja .permbajtja2 {
    min-height: 60vh;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}

.mbajtesi .permbajtja .permbajtja2 .porosite-e-fundit{
    min-height: 50vh;
    flex: 5;
    background: white;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;

}

.mbajtesi .permbajtja .permbajtja2 .klientet-e-rinj {
    flex: 2;
    background: white;
    min-height: 50vh;
    margin: 0 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;

}

/* Permbajtja 3 - porosite e fundit */

.titulli{
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-bottom: 2px solid #999;
}

table{

    padding: 10px;
}
th, td {
    text-align: left;
    padding: 8px;
}



@media screen and (max-width : 1050px) {
    .menu-anash li {
        font-size: 18px;
    }
}

@media screen and (max-width : 940px) {
    .menu-anash li span {
        display: none;
    }

    .menu-anash {
        align-items: center;
    }

    .menu-anash li img {
        width: 40px;
        height: 40px;
    }

}


@media screen and (max-width : 536px) {
    .brand h1 {
        font-size: 16px;
    }

    .mbajtesi .permbajtja .kartat {
        justify-content: center;
    }

    .menu-anash li img {
        width: 30px;
        height: 30px;
    }

    .mbajtesi .permbajtja .permbajtja2 .porosite-e-fundit table th:nth-child(2),
    .mbajtesi .permbajtja .permbajtja2 .porosite-e-fundit table td:nth-child(2){
        display:none;
    }
}
</style>