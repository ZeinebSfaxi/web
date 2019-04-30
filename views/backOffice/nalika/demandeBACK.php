<!doctype html>

<html class="no-js" lang="en">
<?php include "../../../core/DemandeC.php";
$demandeC = new DemandeC();
$dd= date_create()->format('Y-m-d');
$listedemande = $demandeC->afficherDemandes();
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liste des Reclamations</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img_b/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/owl.carousel.css">
    <link rel="stylesheet" href="css_b/owl.theme.css">
    <link rel="stylesheet" href="css_b/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css_b/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css_b/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css_b/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js_b/vendor/modernizr-2.8.3.min.js"></script>

</head>


    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="" alt="" /></a>

            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src="img_b/logo/logoback.png" alt="" /></a>
                    <h2>Geoconcept - <span class="min-dtn">Geoverde</span></h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">


                        <!--====================================================================================================================================================================-->

                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">S.A.V</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Reclamation" href="reclamationBACK.php"><span class="mini-sub-pro">Reclamation </span></a></li>
                                <li><a title="Rendez-vous" href="RDVBACK.php"><span class="mini-sub-pro">Rendez_vous</span></a></li>
                                <li><a title="Demande" href="demandeBACK.php"><span class="mini-sub-pro">Demande</span></a></li>
                            </ul>
                        </li>

                        <!---===============================================================================================================================================================-->


                    </ul>
                </nav>
            </div>
        </nav>
    </div>


    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img_b/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid res-mg-t-15" style="margin-top:10px; ">
            <div class="row admin text-center" style="margin-top:50px; ">
                <div class="col-md-12">
                                <div class="row">
                                    <!--********************STATISTIQUES***************************************-->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="admin-content analysis-progrebar-ctn" style="background-color:white;color:black;"><div class="stats-icon pull-right">
                                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                                </div>
                                                <h4 class="text-left text-uppercase" style="color:black;"><b>Sommee Partenariat</b></h4>
                                                <div class="row vertical-center-box vertical-center-box-tablet">
                                                    <div class="col-xs-9 cus-gh-hd-pro">
                                                        <h2 class="text-right no-margin" style="color:green;font-size:20px;"><?php $ClientFidele=$demandeC->NBRPART();
                                                            {
                                                                foreach($ClientFidele as $row){
                                                                    echo $row["nbr"];
                                                                }
                                                            }?></h2>
                                                    </div>
                                                </div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30" style="background-color:white;color:black;">
                                                <div class="stats-icon pull-right">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </div>
                                                <h4 class="text-left text-uppercase" style="color:black;"><b>Somme sponsoring</b></h4>
                                                <div class="row vertical-center-box vertical-center-box-tablet">
                                                    <div class="col-xs-9 cus-gh-hd-pro">
                                                        <h2 class="text-right no-margin" style="color:#3B6B9A;font-size:20px; "><?php $ClientFidele=$demandeC->NBRSPON();
                                                            {
                                                                foreach($ClientFidele as $row){
                                                                    echo $row["nbr"];
                                                                }
                                                            }?></h2>
                                                    </div>
                                                </div>
                                                <div class="progress progress-mini">
                                                    <div style="width: 100%;" class="progress-bar bg-blue"></div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>



                                </div>
                            </div>


                </div>
            </div>




   
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left:200px;">
                        <div class="product-status-wrap">
                            <div class=" mb-2" style="margin-left:200px; margin-top:5px;">
                            <h4>Liste des Demandes</h4>
                            </div>

                            <form action="demandeBACK.php" method="GET">
                                <div style="display: flex;margin-bottom:10px;">
                                    <div class="input-group mb-3" style="margin-left:200px; margin-top:5px;">
                                        <input type="text" class="form-control"placeholder="Search..." aria-label="" aria-describedby="basic-addon1" style="color:white;" name="search">
                                    </div>
                                    <div class=" mb-2" style="margin-left:10px; margin-top:5px;">
                                        <input type="submit" name="recherche" value="OK" style="
background-color:#6090;
border-style: outset;

border-radius: 5px;
border-color: black;

padding: 6px;
background-color: rgb(255, 255, 255); " >

                                    </div>
                                </div>
                            </form>

                            <table>
                                <tr>
                                    <th>Date de la demande </th>
                                    <th>Nom groupe</th>
                                    <th>Numero tel </th>
                                    <th>Objet</th>
                                    <th>Details demande</th>
                                    <th>Etat demande</th>
                                    <th>Nom user</th>
                                    <th>Prenom user</th>

                                </tr>


                                <?PHP

                                /*if (isset($_GET["search"]) && $_GET["search"]!=""){

                                    //  var_dump($_GET["cin"]);

                                    $listedemande=$demandeC->RechercheDemande($_GET["search"]);

                                }*/

                                foreach($listedemande as $row){
                                    if ($dd>= $row['DATE_DEMANDE']){
                                        if($row['ETAT_D'] == 'non traitee'){

                                            ?>
                                            <tr style="background-color:#3B6B9A;">

                                        <?PHP } else if($row['ETAT_D'] == "Traitee") {
                                            ?>

                                            <tr style="background-color:#365D84;">
                                        <?php }

                                        ?>

                                    <td><?PHP echo $row['DATE_DEMANDE']; ?></td>
                                    <td><?PHP echo $row['NOM_D']; ?></td>
                                    <td><?PHP echo $row['NOM_D']; ?></td>
                                    <td><?PHP echo $row['NUM_D']; ?></td>
                                    <td><?PHP echo $row['OBJET_D']; ?></td>

                                    <td><?PHP echo $row['DETAILS_D']; ?></td>
                                    <td><?PHP echo $row['ETAT_D']; ?></td>
                                    <td><?php echo $row['NOM_U']?></td>
                                    <td><?php echo $row['PRENOM_U']?></td>

                                    <td> <form method="post" action="http://localhost/projet - Copie/views/backOffice/nalika/traiterD.php">
                                        <button class="ps-setting">Traiter</button>
                                            <input type="hidden" value="<?PHP echo $row['ID_D']; ?>" name="ID_D">
                                        </form>
                                    </td>
                                       <!-- <button data-toggle="tooltip" title="Trash" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>-->
                                       <!-- <a href="deletedemande.php?sup=<?php //echo $row['ID_D'];?>" class="fa fa-trash-o"></a>-->
                                    <td> <form method="post" action="http://localhost/projet - Copie/views/backOffice/nalika/deletedemande.php">
                                            <button data-toggle="tooltip" title="Trash" ><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                           <!-- <input type="submit" name="supprimer" class="nalika-delete-button" value="Supprimer">-->
                                            <input type="hidden" value="<?PHP echo $row['ID_D']; ?>" name="ID_D">
                                        </form>

                                    </td>
                                </tr>

                                <?php } }?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- jquery
		============================================ -->
    <script src="js_b/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js_b/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js_b/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js_b/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js_b/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js_b/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js_b/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js_b/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js_b/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js_b/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js_b/metisMenu/metisMenu.min.js"></script>
    <script src="js_b/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js_b/sparkline/jquery.sparkline.min.js"></script>
    <script src="js_b/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js_b/calendar/moment.min.js"></script>
    <script src="js_b/calendar/fullcalendar.min.js"></script>
    <script src="js_b/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js_b/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js_b/main.js"></script>
</body>
</html>