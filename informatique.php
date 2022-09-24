<!DOCTYPE html>
<html lang="zxx">
    

<head>        

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap" rel="stylesheet">
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <!-- Title -->
        <title>Bon-plan-tech</title>
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="css.main.css" rel="stylesheet" type="text/css" />
 <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="css/all.min.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body    >
        <div> 
            <div  style=" right:0px; height: 200px; width: 78%;   background-image: url(img/fond.png); position: fixed; z-index: 9;  background-repeat: no-repeat;">
            <div   style=" border-radius: 10px; height:50px; background-color: #d6ad08;position: absolute; width: 700px; top: 0px; right: 20px ; display: flex; justify-content: space-around; "   >
                        <div class="switcher-head" >
            <span>  <a href="index.html">Acceuil </a> </span> 
         </div>
         <div  class="switcher-head" >
            <span>  <a href="resume.html">Evaluer nous </a> </span> 
         </div>
         <div class="switcher-head" >
            <span>  <a href="">Créer votre compte</a> </span> 
         </div>
        </div>
         </div> 
         <div style="position:absolute ; left:600px; padding-bottom:0px; top:210px "  >
          <h3> <b>  Rayon</b> informatique en chiffre </h3>
          <span style="width:500px;   height: 50px;" class="underline center"></span></div>
         <div style="position: fixed; left: 0px; top:0px; background-color:#c6ede1; width: 300px; height: 900px; z-index:10;  "  id="sidebar" class="sidebar">
         <div   style="padding-left: 50px;padding-top: 50px;      "    class="product-filters">
         <div class="filtreDonneé">
          <h4 class=""> Filtrer par tarif </h4>
         <div>
          <h4 class=""> Filtrer par magazin </h4>
          <div >
              <form  action="" method=post  >
                                 <div>
                                       <select style=height: 15px;  name=mag ;>
                                 <?php 
                                  $cn=mysqli_connect("localhost","root","","pfa") or die("erreur");
         
                                     $requete="select * from magazin";
                                     $resultat=mysqli_query($cn,$requete);
                                         while($rows=mysqli_fetch_array($resultat, MYSQLI_NUM))
                                         {
                                         echo("<option value=  $rows[0]  >     $rows[1]     </option>");
                                         }
                                            
                                 ?>
                                             </select>
         
         
         
                             </div>
                             <div style="padding-top: 25px;"  >
                             <input  style="background-color: #d6ad08;" type="submit" name=btnsubmit   value="filtrer" >   </div>
         </form>
                         </div></div>
          </div></div> 
         </div>
         <div style="position: absolute; left:300px;  top: 50px; "  >
             <main style=" width: 1000px; padding-top: 270px; height: 800px;   padding-left: 10px;" class="  ">
                 <div  class="booksmedia-fullwidth booksmedia-popular-list">
                          <div  > 
                          <?php
                        if(isset($_POST["btnsubmit"])){
                             echo(" <div style= width:80%; color: #d6ad08;  position:absolute ; top:200px >
                              <h4 >Basculer vers toutes les magazins</h4>
                              <span style=width:80px;  height: 5px; class=underline center> </span>
                              </div>
                              <div class=grid-container1> ") ;
         
                              $id=$_POST["mag"];
                              
                          $con=mysqli_connect("localhost","root","","pfa") or die("erreur");
                         $requette = "  select * from magazin where  id=$id  ";
                         $result = mysqli_query($con,$requette);
                         while($magazin=mysqli_fetch_array($result , MYSQLI_NUM)){
                             echo("   <div class=grid-item1>  <center > 
                                <h4 style= padding-top:20px; > Resultat de recherche: $magazin[1] Magazin </h4>
                                <a style=background-color:red; href=  data-toggle=blog-tags data-placement=top title=Aimer>
                                <i class=fa-solid fa-heart></i>
                            </a>
                               <br>
                                <ul >
                                <li style=width:210px ; height:250px;>
                                <figure  style= height:245px; width:150px>
                                   <a href= categorieInformatiques.html >  <img src=img/$magazin[3]  alt=$magazin[1] >
                                     <figcaption  style= height:250px; width:200px >
                                         <header style=font-size: x-large; >
                                             <center> 
                                                 <h5 style=color: rgb(7, 77, 180); > $magazin[1]  </h5>
                                                
                                             </center>
                                             </header>
                                     </figcaption>  </a>
                                 </figure>                                                
                             </li></ul> </center></div>
                             <div class=grid-item1> 
                             <aside style=width:200px  >
                    
                     
                     Merci de <a style = color:red  href=$magazin[5]  >  communiquer</a> vos suggestions ou vos réclamations avec  <b >  $magazin[1]</b> a travers son site web,   par mail , téléphone ou fax à :
                     
                     Par Tél : 36 010 010</p></aside></div>
                             
                             ");
                         }echo("</div>");};
                        
                          ?>
                          <div style="  padding-top:30px;  "   > 
         <?php
          if(empty($_POST["btnsubmit"]) ){
              echo(" 
              <div style=width:90%;  > 
              <h4 > Toutes les magazins   </h4>
                   <span style=width:20px; style=padding-bottom :10px; height: 5px; class=underline center ;> </span> </div>
                 <div class=grid-container>  ") ;
                           $con1=mysqli_connect("localhost","root","","pfa") or die("erreur");
                           $requette1 = " select *  from magazin  ";
                           $result1 = mysqli_query($con1,$requette1);
                           while($magazin1=mysqli_fetch_array($result1 , MYSQLI_NUM)){
                          echo("
                          <div class=grid-item> 
                          <ul >
                          <li style=width:210px ; height:250px;>
                          <figure  style= height:245px; width:150px>
                                <a href=categorieInformatiques.html>  <img src=img/$magazin1[3] >
                                <figcaption  style= height:250px; width:200px >
                                <header style=font-size: x-large; >
                                          <center> 
                                              <h5 style=color: rgb(7, 77, 180); > <b>  $magazin1[1] </b> </h5>
                                             <b> Tranche de prix <br>
                                               1000dt   -  1900dt </b>
                                          </center>
                                  </header>
                                  </figcaption></a>
                              </figure>                                                
                          </li> </ul>      
                          
                          
                         </div> "); }
                         echo("</div>");
                         
                         }
                          ?>
                 </div>
                 </main> <!-- /.site-wrapper -->
         </div>
                 </div>
            </body>
         
 

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>


</html>