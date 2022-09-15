 
 <?php
 
 
 
 
 
 
 ?>

  


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
<!-- Theme Informations -->	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
<!-- Theme Informations -->

	<title>Plateforme Immobiliere</title>

<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style_second_theme.css">	
	<link rel="stylesheet" href="css/common-style.css">
	<link rel="stylesheet" href="style.css">
<!-- Stylesheets -->
  
<!-- Icons & Fonts -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Icons & Fonts -->

</head>
<body id="page-top">
	<style>
        
		div ul li a{

display:inline-block;                /* Transformation en block */
min-width: 120px;             /* Largeur minimale des liens */   

margin: ;               /* Marges externes (1 valeurs = 4 directions) */
padding: ;            /* Marges internes (2 valeurs = haut/bas et gauche/droite)*/
text-align: center;           /* Centrage du texte */   
background-color: ;    /* Couleur d'arrière-plan */
color: ;                  /* Couleur du texte */
text-decoration: none;        /* Suppression du soulignement */
border: 3px solid #000000;       /* Ajout d'une bordure */
border-radius: ;
}

	</style>
  
  
  <!-- Navigation Section-->
    <nav id="nav" class="container-fluid navbar navbar-default navbar-fixed-top">
        <div class="container">
	      <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
	      	    <p class="navbar-brand page-scroll"><span style="color:#800080;">EUROD-</span>IMMOBILIER.CI</p>
	      </div>
	      <div class="collapse navbar-collapse" id="toggle">
		      	<ul class="nav navbar-nav">
				   <li class="dropdown">
		                <a  href="acceuil.php">ACCEUIL 
		                  <i class="text-right fa fa-angle-up fa-2x"></i>
		                </a>
		                
                    </li>
		      		<li class="lBorder"><a class="page-scroll" href="#about">A PROPOS DE NOUS</a></li>
		      		<li class="lBorder"><a class="page-scroll" href="#contact">S'INSCRIRE</a></li>
		      		<li class="dropdown">
		                <a class="dropdown-toggle" data-toggle="dropdown" href=""><button>SE CONNECTER</button> 
		                  <i class="text-right fa fa-angle-up fa-2x"></i>
		                </a>
						
		               <!-- <ul class="dropdown-menu">
		                  <li><a href="index.html">First theme</a></li>
			              <li><a href="second-theme.html">Second Theme</a></li>
			              <li><a href="third-theme.html">Third Theme</a></li>
			              <li><a href="404.html">Error 404</a></li>
		                </ul>
						!-->
                    </li>
					<li class="">
                        <a  href="logout.php"><button>SE DECONNECTER</button>  
		                  <i class="text-right fa fa-angle-up fa-2x"></i>
		                </a>
					</li>
					
		      	</ul>
	      </div>
		  <?php 
		    session_start(); 
		       if (!$_SESSION['mot_de_passe']) {
				  header('Location: login2.php');
			   }

             echo $_SESSION['email'];
			 echo $_SESSION['id_user'];



		        ?>
											
        </div>
	   <!-- Search - start -->
        <div class="search-field">
            <a id="search-field-btn" class="search-field-btn" href="#"><i class="fa fa-search"></i></a>
            <form class="search-field-form">
                <input type="text" placeholder="Enter your search term...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Search - end -->
    </nav>
  <!-- End of Navigation section-->

  <!-- Intro Section -->
    <header id="intro" class="intro">
    	<div class="intro-box-second-theme container-fluid">
    	    <div class="container">
	       		<h2 style="text-transform:uppercase; color:#FFFFFF;"><b>bienvenue sur la plateforme de gestion <br> immobilière et foncière.</b></h2>
               
	       		<p><b>Logiciel complet d'outils et services pour le développement <br> économique du territoire Ivoirien.</b></p>
		        <div class="intro-btn">
		       		<a class="page-scroll btn-custom" href="offres.php">Consulter nos Offres></a>
		       	</div>

	       	</div>
       </div>
    </header>
  <!-- Intro Section -->
  
  <!-- Selling Section -->
    <div id="selling" class="second-theme-selling">
        <div class="selling-title container-fluid ">
        	<div class=" container second-theme-title">
				<h2>LE CHOIX IMMOBILIER</h2>
				<p>Nous sommes actif dans la construction,la location et la vente de maisons ou de terrains,
                   Nous couvrons la plupart des régions du pays.</p>
        	</div>
        </div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-villa" data-toggle="tab">CONSTRUIRE</a></li>
			<li><a href="#tab-appartment" data-toggle="tab">LOUER</a></li>
			<li><a href="#tab-terrain" data-toggle="tab">VENDRE</a></li>
		</ul>
		<div class="tab-content container-fluid">
			<!-- Appartment Tab -->
			<div id="tab-villa" class="tab-pane active container">
		        <div class="row">
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img1.jpg">
		               <div class="sub-box-content">
		                 <h5>UT WISI</h5>
		                 <p class="description text-muted">
		                   Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img2.jpg">
		               <div class="sub-box-content">
		                 <h5>DUIS AUTEM</h5>
		                 <p class="description text-muted">
		                   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img3.jpg">
		               <div class="sub-box-content">
		                 <h5>VEL ILLUM</h5>
		                 <p class="description text-muted"> 
		                   vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
		                 </p>  
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img4.jpg">
		               <div class="sub-box-content">
		                 <h5>SED DIAM</h5>
		                 <p class="description text-muted">
		                   sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img5.jpg">
		               <div class="sub-box-content">
		                 <h5>VEL ILLUM</h5>
		                 <p class="description text-muted"> 
		                   vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
		                 </p>  
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img6.jpg">
		               <div class="sub-box-content">
		                 <h5>SED DIAM</h5>
		                 <p class="description text-muted">
		                   sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img7.jpg">
		               <div class="sub-box-content">
		                 <h5>UT WISI</h5>
		                 <p class="description text-muted">
		                   Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img8.jpg">
		               <div class="sub-box-content">
		                 <h5>DUIS AUTEM</h5>
		                 <p class="description text-muted">
		                   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <button type="submit" class="btn btn-custom">Vouloir plus</button>
		        </div>
			</div>
			<!-- Appartment Tab -->
			<div id="tab-appartment" class="tab-pane container">
			    <div class="row">
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img7.jpg">
		               <div class="sub-box-content">
		                 <h5>UT WISI</h5>
		                 <p class="description text-muted">
		                   Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img8.jpg">
		               <div class="sub-box-content">
		                 <h5>DUIS AUTEM</h5>
		                 <p class="description text-muted">
		                   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img5.jpg">
		               <div class="sub-box-content">
		                 <h5>VEL ILLUM</h5>
		                 <p class="description text-muted"> 
		                   vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
		                 </p>  
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img6.jpg">
		               <div class="sub-box-content">
		                 <h5>SED DIAM</h5>
		                 <p class="description text-muted">
		                   sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img1.jpg">
		               <div class="sub-box-content">
		                 <h5>UT WISI</h5>
		                 <p class="description text-muted">
		                   Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img2.jpg">
		               <div class="sub-box-content">
		                 <h5>DUIS AUTEM</h5>
		                 <p class="description text-muted">
		                   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img3.jpg">
		               <div class="sub-box-content">
		                 <h5>VEL ILLUM</h5>
		                 <p class="description text-muted"> 
		                   vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
		                 </p>  
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img4.jpg">
		               <div class="sub-box-content">
		                 <h5>SED DIAM</h5>
		                 <p class="description text-muted">
		                   sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
			    </div>
		        <button type="submit" class="btn btn-custom">WANT MORE</button>
			</div>
			<!-- Terrain Tab -->
			<div id="tab-terrain" class="tab-pane container">
			    <div class="row">
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img6.jpg">
		               <div class="sub-box-content">
		                 <h5>UT WISI</h5>
		                 <p class="description text-muted">
		                   Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img5.jpg">
		               <div class="sub-box-content">
		                 <h5>DUIS AUTEM</h5>
		                 <p class="description text-muted">
		                   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img8.jpg">
		               <div class="sub-box-content">
		                 <h5>VEL ILLUM</h5>
		                 <p class="description text-muted"> 
		                   vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
		                 </p>  
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img7.jpg">
		               <div class="sub-box-content">
		                 <h5>SED DIAM</h5>
		                 <p class="description text-muted">
		                   sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img4.jpg">
		               <div class="sub-box-content">
		                 <h5>UT WISI</h5>
		                 <p class="description text-muted">
		                   Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img3.jpg">
		               <div class="sub-box-content">
		                 <h5>DUIS AUTEM</h5>
		                 <p class="description text-muted">
		                   Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img2.jpg">
		               <div class="sub-box-content">
		                 <h5>VEL ILLUM</h5>
		                 <p class="description text-muted"> 
		                   vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
		                 </p>  
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
		           <div class="col-xs-12 col-sm-6 col-md-3">
		             <div class="sub-box">
		               <img class="img-responsive" src="img/selling-img/sel-img1.jpg">
		               <div class="sub-box-content">
		                 <h5>SED DIAM</h5>
		                 <p class="description text-muted">
		                   sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
		                 </p>
		                 <p class="infos" data-toggle="modal" data-target="#description">News</p>
		                 <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
		               </div>
		             </div>
		           </div>
			    </div>
		        <button type="submit" class="btn btn-custom">WANT MORE</button>
			</div>
		</div>
    </div>
  <!-- End of Selling Section -->

  <!-- Renting Section -->
    <div id="renting" class="second-theme-renting container-fluid">
    	<div class="container">
    	    <div class="second-theme-title">
	    		<h2>QU'ALLONS-NOUS VOUS LOUER ?</h2>
	    		<p>Maecenas tristique orci ac sem</p>
    		</div>
    		<div class="row">
    			<div class="col-xs-12 col-sm-4">
    				<div class="block">
    					<h4>Renting Guide</h4>
    					<p>Aenean nonummy hendrerit maurihasellus portsce suscipit varium sociis natoque penatibus et magnis dis parturienetontes nascetur ridiculus musulla dutusce.
    					</p>
    					<button type="submit" class="btn btn-custom">READ MORE...</button>
    				</div>
    				<div class="block">
    					<h4>Main Informations</h4>
    					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus musulla duis. Fuscecer feugiat malesuada odio.
    					</p>
    					<ul class="list">
    						<li>
    							<ul>
    								<li><i class="fa fa-caret-right"></i> Cum sociis</li>
    								<li><i class="fa fa-caret-right"></i> Natoque</li>
    								<li><i class="fa fa-caret-right"></i> Penatibus</li>
    								<li><i class="fa fa-caret-right"></i> Et magnis</li>
    							</ul>
    						</li>
    						<li>
    							<ul>
    								<li><i class="fa fa-caret-right"></i> Parturient</li>
    								<li><i class="fa fa-caret-right"></i> Montes</li>
    								<li><i class="fa fa-caret-right"></i> Nascetur</li>
    								<li><i class="fa fa-caret-right"></i> Ridiculus</li>
    							</ul>
    						</li>
    						<li>
    							<ul>
    								<li><i class="fa fa-caret-right"></i> Musulla</li>
    								<li><i class="fa fa-caret-right"></i> Fuscecer</li>
    								<li><i class="fa fa-caret-right"></i> Feugiat</li>
    								<li><i class="fa fa-caret-right"></i> Malesuada</li>
    							</ul>
    						</li>
    					</ul>
    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-8">
    				<div class="block">
    					<div class="row">
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img1.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img2.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img3.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img4.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img8.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img6.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img7.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img5.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    						<div class="col-xs-4">
    							<div class="img-box">
	    						   <img class="img-responsive" src="img/selling-img/sel-img9.jpg">
	    						   <div class="img-box-caption">
	    						   	  <a class="img-icon icon-left animation" data-toggle="modal" href="#description">
	    						   	  	<i class="fa fa-info"></i>
	    						   	  </a>
	    						   	  <a class="img-icon icon-right animation" data-toggle="modal" href="#pictures">
	    						   	  	<i class="fa fa-photo"></i>
	    						   	  </a>
	    						   </div>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="block block-footer">
    					<p>If you want to see all rental properties, appartments or villas click this link
    					   &nbsp;&nbsp;&nbsp;&nbsp; <a href="" class="text-right">Go To Catalog</a>
    					</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  <!-- End of Renting Section -->
  <?php include('A_propos.php'); ?>

  <!-- About Section -->
   
  <!-- About Renting Section -->

  <!-- Contact Section -->
    <div id="contact" class="container-fluid second-theme-contact">
    	<div class="container">
    		<div class="second-theme-title">
    			<h2>JOIN US EASILY</h2>
    			<p>Ad aut recusandae minus eaque facere</p>
    		</div>
    		<div class="row">
    			<div class="col-xs-12 col-sm-5 col-lg-4">
    			    <div class="box">
	    				<form class="form-horizontal">
	    				   <h4>Contact Us</h4>
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   <input type="text" class="form-control" placeholder="Your Name ">	
	    				   	</div>
	    				   </div>  	
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   <input type="text" class="form-control" placeholder="Your Mail ">	
	    				   	</div>
	    				   </div>  	
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   <textarea class="form-control" placeholder="Your Message"></textarea>	
	    				   	   <button type="submit" class="btn btn-custom">SEND <i class="fa fa-send"></i></button>
	    				   	</div>
	    				   </div>  	
	    				</form>
    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-7 col-lg-8">
    				<div class="box">
    					<h4>Get In Touch</h4>
    					<ul class="social-icon-link">
    						<li><a href=""><i class="fa fa-facebook"></i></a></li>
    						<li><a href=""><i class="fa fa-twitter"></i></a></li>
    						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
    						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
    						<li><a href=""><i class="fa fa-instagram"></i></a></li>
    					</ul>
    					<hr>

    					<ul class="address">
    						<li>
    						   <p>
    						     <i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;+228 92 22 99 54
    						   </p>
    						</li>
    						<li>
    						   <p>
    						     <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;kouvenceslas93@gmail.com
    						   </p>
    						</li>
    						<li>
    						   <p>
    						     <i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Segbe, rue akato, Maison Don Peno</p>
    						</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    		<!--Google Map- to select your location find it on Google maps-->
			<div class="map">
				<div class="box">
					<h4>Google Map Address</h4>
					<div class="google-map"><i class="fa fa-map-marker"></i></div>
				</div>
			</div>
    	</div>
    </div>
  <!-- End of Contact Section -->

  <?php include('includes/footer.php'); ?>

  <!-- Modal Boxes -->
     <!-- house description-->
     <div id="description" class="modal fade main-modal"  tabindex="-1" aria-hidden="true">
     	<div class="container-fluid row">
     		<div class="modal-content col-xs-12 col-sm-6 col-sm-push-3">
     			<div class="modal-content-header">
                  <i class="fa fa-times animation" data-dismiss="modal"></i>
                </div>
                <div class="modal-content-body">
			        <div class="description">
			        	<h4>Main News</h4>
			        	<div class="box">
			        	<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus musulla duis. Fuscecer feugiat malesuada odio.
			        	</p>
                        <ul>
                        	<li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 Swimming Pool</li>
                        	<li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 Private Office</li>
                        	<li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 Waiting Room</li>
                        	<li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;5 Bed Room</li>
                        	<li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 Garden</li>
                        </ul>
                        <p class="footer">
                        	<span class="title">Price</span><span class="label label-danger text-left">$ 15000</span>
                        </p>
                        </div>
			        </div>
                	<div class="map">
            		    <h4>House Address</h4>
						<p>Segbe, rue akato, Maison Don Peno</p>
						<div class="box">
							<div class="google-map"><i class="fa fa-map-marker"></i></div>
						</div>
			        </div>
                </div>
     		</div>
     	</div>
     </div>
  <!-- End of house description-->
  <!-- House Pictures-->
     <div id="pictures" class="modal fade main-modal" tabindex="-1" aria-hidden="true">
     	<div class="container-fluid row">
     		<div class="modal-content col-xs-12 col-sm-8 col-sm-push-2">
     			<div class="modal-content-header">
                  <i class="fa fa-times animation" data-dismiss="modal"></i>
                </div>
                <div class="modal-content-body">
                	<div id="houses-pictures" class="carousel slide">
                		<div class="carousel-inner">
                			<div class="item active">
                				<img class="img-responsive img-thumbnail" src="img/selling-img/sel-img1.jpg">
                			</div>
                			<div class="item">
                				<img class="img-responsive img-thumbnail" src="img/selling-img/sel-img2.jpg">
                			</div>
                			<div class="item">
                				<img class="img-responsive img-thumbnail" src="img/selling-img/sel-img3.jpg">
                			</div>
                			<div class="item">
                				<img class="img-responsive img-thumbnail" src="img/selling-img/sel-img4.jpg">
                			</div>
                			<div class="item">
                				<img class="img-responsive img-thumbnail" src="img/selling-img/sel-img5.jpg">
                			</div>
                			<div class="item">
                				<img class="img-responsive img-thumbnail" src="img/selling-img/sel-img6.jpg">
                			</div>
                		</div>
	                	<a class="direction direction-left animation" href="#houses-pictures" data-slide="prev">
	                		<i class="fa fa-chevron-left"></i>
	                	</a>
	                	<a class="direction direction-right animation" href="#houses-pictures" data-slide="next">
	                		<i class="fa fa-chevron-right"></i>
	                	</a>
                	</div>
                </div>
     		</div>
     	</div>
     </div>
  <!-- End of House Pictures-->
  <!-- End of Modal Boxes -->

  <!-- Social Icons -->
  <div class="social-icon-menu">
  	 
  </div>
  <!-- End of Social Icons -->

<!-- jQuery-->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap Core Javascript--> 
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugins -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/fancybox.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/progressbar.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>
</html>