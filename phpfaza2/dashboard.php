
    <?php include '../components/menu-anash.php';  
        session_start();
        if (!isset($_SESSION['role']) ) {
            header("Location:../php_code/index.php");
            
        }
    ?>

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
                            <h3>Klient</h3>
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
                            <th colspan="2"  >Produkti</th>

                            <th>Totali</th>

                        </tr>

                        <tr>

                            <td>Jona Rrahmani</td>
                            <td>Kufje JBL</td>
                            <td> <img src="../images/kufjeJBL.jpg " width="30px" height="30px" > </td>
                            <td>36.17 €</td>

                        </tr>

                        <tr>

                            <td>Fazli Thaqi</td>
                            <td>Mouse Razer</td>
                            <td> <img src="../images/mouseRazer.jpg " width="30px" height="30px" > </td>
                            <td>39.50 €</td>

                        </tr>

                        <tr>

                            <td>Vesa Rrahmani</td>
                            <td>Zmadhues zëri JBL</td>
                            <td> <img src="../images/jbl.jpg " width="30px" height="30px" > </td>
                            <td>301.50 €</td>

                        </tr>

                        <tr>

                            <td>Yll Shillova</td>
                            <td>Fanellë  Bad News Eagles</td>
                            <td> <img src="../images/bNE.jpg " width="30px" height="30px" > </td>
                            <td>49.50 €</td>

                        </tr>

                        <tr>

                            <td>Dijane Hoti</td>
                            <td>ÇANTË PULSE</td>
                            <td> <img src="../images/cantepulse.jpg " width="30px" height="30px" > </td>
                            <td>31.68 €</td>

                        </tr>
                        

                    </table>

                </div>



                






                <div class="klientet-e-rinje">

                    <div class="porosite-e-fundit"> 

                        <div class="titulli">
                        <h2>Best sellers</h2>

                    </div>

                    <table>
                        <tr>
                            <th>Produkti</th>
                            <th>Emri</th>
                            <th>Cmimi</th>

                        </tr>


                        <tr>

                            <td><img src="../images/kufjeJBL.jpg" width="39px" height="39px"  ></td>
                            <td>Kufje JBL</td>
                            <td>36.17 €</td>

                        </tr>

                        <tr>

                            <td><img src="../images/cantepulse.jpg" width="39px" height="39px"  ></td>
                            <td>ÇANTË PULSE</td>
                            <td>31.68 €</td>

                        </tr>

                        <tr>

                            <td><img src="../images/mouseRazer.jpg" width="39px" height="39px"  ></td>
                            <td>Mouse Razer	</td>
                            <td>39.50 €</td>

                        </tr>

                        <tr>

                            <td><img src="../images/airpods3rdgen.png" width="39px" height="39px"  ></td>
                            <td>Apple AirPods	</td>
                            <td>259.00 €</td>

                        </tr>

                        

                    </table>


                </div>

                </div>
               


            </div>
        </div>
    </div>


    



    
</body>
</html>