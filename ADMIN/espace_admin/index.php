<?php
session_start();

if (!$_SESSION['mdp']) {
    header('Location: connexion.php');
}
$bd = new PDO('mysql:host=localhost;dbname=bd_immogest;charset=utf8;', 'root', '');

// controler enregistrement d'un cabinet d'architecte
     if (isset($_POST['envoi'])) {
        if (!empty($_POST['id_architecte']) AND !empty($_POST['nom']) AND !empty($_POST['matricule'])) {
            $id_architecte = htmlspecialchars($_POST['id_architecte']);
            $nom = htmlspecialchars($_POST['nom']);
            $matricule = htmlspecialchars($_POST['matricule']);
            
            $insertUser = $bd->prepare('INSERT INTO cabinet_architecte(nom,	id_architecte,	matricule)VALUES(?,?,?)');
            $insertUser->execute(array($nom,  $id_architecte, $matricule));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }

// controler enregistrement chef chantier
      if (isset($_POST['envoi1'])) {
        if (!empty($_POST['id_chefchantier']) AND !empty($_POST['nom']) AND !empty($_POST['matricule'])) {
            $id_chefchantier = htmlspecialchars($_POST['id_chefchantier']);
            $nom = htmlspecialchars($_POST['nom']);
            $matricule = htmlspecialchars($_POST['matricule']);
            
            $insertUser = $bd->prepare('INSERT INTO chef_chantier(nom,	id_chefchantier,	matricule)VALUES(?,?,?)');
            $insertUser->execute(array($nom,	$id_chefchantier, $matricule));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }

  //controler enregistrement entreprise immobilier
     if (isset($_POST['envoi3'])) {
        if (!empty($_POST['id_entreprise']) AND !empty($_POST['nom']) AND !empty($_POST['matricule'])) {
            $id_entreprise = htmlspecialchars($_POST['id_entreprise']);
            $nom = htmlspecialchars($_POST['nom']);
            $matricule = htmlspecialchars($_POST['matricule']);
            
            $insertUser = $bd->prepare('INSERT INTO entreprise_immobilier(nom,	id_entreprise,	matricule)VALUES(?,?,?)');
            $insertUser->execute(array($nom,	$id_entreprise, $matricule));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }


     //controler enregistrement recrute
	 if (isset($_POST['envoi4'])) {
        if (!empty($_POST['id_agentimmobilier']) AND !empty($_POST['id_entreprise']) AND !empty($_POST['date'])) {
            $id_entreprise = htmlspecialchars($_POST['id_agentimmobilier']);
            $nom = htmlspecialchars($_POST['id_entreprise']);
            $matricule = htmlspecialchars($_POST['date']);
            
            $insertUser = $bd->prepare('INSERT INTO recrute(id_agentimmobilier,	id_entreprise  date)VALUES(?,?,?)');
            $insertUser->execute(array($id_agentimmobilier,	 $id_entreprise, $date));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }


   //controler enregistrement appel d'offres
	 if (isset($_POST['envoi5'])) {
        if (!empty($_POST['id_offre']) AND !empty($_POST['libelle']) AND !empty($_POST['prix']) AND !empty($_POST['criteres']) AND !empty($_POST['id_chefchantier']) AND !empty($_POST['id_architecte'])) {
            $id_offre = htmlspecialchars($_POST['id_offre']);
            $libelle = htmlspecialchars($_POST['libelle']);
            $prix = htmlspecialchars($_POST['prix']);
			$criteres = htmlspecialchars($_POST['criteres']);
			$id_chefchantier = htmlspecialchars($_POST['id_chefchantier']);
			$id_architecte = htmlspecialchars($_POST['id_architecte']);
            
            $insertUser = $bd->prepare('INSERT INTO  appel_offres(id_offre,	libelle,  prix, criteres, id_chefchantier, id_architecte)VALUES(?,?,?,?,?,?)');
            $insertUser->execute(array($id_offre,  $libelle,  $prix,  $criteres,  $id_chefchantier,  $id_architecte));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }



	 //controler enregistrement Localiser
	 if (isset($_POST['envoi6'])) {
        if (!empty($_POST['date']) AND !empty($_POST['prix']) AND !empty($_POST['ville']) AND !empty($_POST['quartier']) AND !empty($_POST['id_agentimmobilier']) AND !empty($_POST['id_maison'])) {
            $date = htmlspecialchars($_POST['date']);
            $prix = htmlspecialchars($_POST['prix']);
            $ville = htmlspecialchars($_POST['ville']);
			$quartier = htmlspecialchars($_POST['quartier']);
			$id_agentimmobilier = htmlspecialchars($_POST['id_agentimmobilier']);
			$id_maison = htmlspecialchars($_POST['id_maison']);
            
            $insertUser = $bd->prepare('INSERT INTO  localiser(date,	ville,  prix, quartier, id_agentimmobilier, id_maison)VALUES(?,?,?,?,?,?)');
            $insertUser->execute(array($date,  $prix,  $ville,  $quartier,  $id_agentimmobilier,  $id_maison));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }


	    //controler enregistrement Maison
	 if (isset($_POST['envoi7'])) {
        if (!empty($_POST['id_maison']) AND !empty($_POST['numero']) AND !empty($_POST['proprietaire']) AND !empty($_POST['fichier']) AND !empty($_POST['images'])) {
            $id_maison = htmlspecialchars($_POST['id_maison']);
            $numero = htmlspecialchars($_POST['numero']);
            $proprietaire = htmlspecialchars($_POST['proprietaire']);
			$fichier = htmlspecialchars($_POST['fichier']);
			$images = htmlspecialchars($_POST['images']);

			$tmp_name=$_FILES['images']['tmp_name'];
			$nom_image=$_FILES['images']['name'];
			$taille=$_FILES['images']['size'];
			$type=basename($_FILES['images']['type']);

			if ($taille<2097152) {
				$extensionvalide=array('png','jpeg','jpg');
				if (in_array($type,$extensionvalide)) {
					$chemin="../ADMIN/img/selling-img/".$nom_image;
					if (is_uploaded_file($tmp_name)) {
						move_uploaded_file($tmp_name,$chemin);
					}
				}else {
					$error="Le fichier doit être de format:png,jpeg,jpg et la taille maximale doit être de 2 Mo";
				}
			}else {
				$error= "Le fichier doit être de format:'png','jpeg','jpg et la taille maximale doit être de 2 Mo ";
			}
		
			
            
            $insertUser = $bd->prepare('INSERT INTO  maison(id_maison,	numero,  proprietaire, fichier, images)VALUES(?,?,?,?,?)');
            $insertUser->execute(array($id_maison,  $numero,  $proprietaire,  $fichier,  $images));

           

            echo $_SESSION['id_user'];
            header('Location: index.php');
        }else{
            echo "veuillez complêter les champs";
            
        }
      
     }







?>

                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Inscription espace admin</title>
                        </head>
                        <body>
                        <form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UN CABINET D'ARCHITECTURE</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="id_architecte">id_architecte</label>
								<input type="text" name="id_architecte" class="form-control"  placeholder="<?php echo 'votre id_architecte ';?>" autocomplete="on" value="<?php echo isset($prenom) ? $prenom : '' ?>"
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="nom">Nom:</label>
                            <input type="text" name="nom" class="form-control"  placeholder="<?php echo 'votre nom ';?>" autocomplete="on" value="<?php echo isset($prenom) ? $prenom : '' ?>"
                            required>	
                            <p><?php echo isset($error['nom']) ? $error['nom'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="matricule">Matricule:</label>
								<input type="text" name="matricule" class="form-control" placeholder="votre matricule" 
								value="<?php echo isset($matricule) ? $matricule : '' ?>" required>	
								<p><?php echo isset($error['matricule']) ? $error['matricule'] : '' ?></p>
								</div>
	    				   </div>	
	    				   <!-- <div class="form-group">
	    				   	<div class="col-xs-12">
							   <select name="users_role" id="" value="<?php echo isset($users_role) ? $users_role : '' ?>" required>
									<option value="">veuillez choisir un rôle</option>
									<option value="architecte">architecte</option>
									<option value="agent">agent</option>
									<option value="entreprise">entreprise</option>
									<option value="utilisateur">utilisateur</option>
								</select>	
								
	    				   	</div>
	    				   </div>  	 -->
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>
                        <br>

                        <form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UN CHEF CHANTIER</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="id_chefchantier">Chef chantier</label>
								<input type="text" name="id_chefchantier" class="form-control"  placeholder="<?php echo 'votre id_architecte ';?>" autocomplete="on" value="<?php echo isset($prenom) ? $prenom : '' ?>"
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="nom">Nom:</label>
                            <input type="text" name="nom" class="form-control"  placeholder="<?php echo 'votre nom ';?>" autocomplete="on" value="<?php echo isset($prenom) ? $prenom : '' ?>"
                            required>	
                            <p><?php echo isset($error['nom']) ? $error['nom'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="matricule">Matricule:</label>
								<input type="text" name="matricule" class="form-control" placeholder="votre matricule" 
								value="<?php echo isset($matricule) ? $matricule : '' ?>" required>	
								<p><?php echo isset($error['matricule']) ? $error['matricule'] : '' ?></p>
								</div>
	    				   </div>	
	    				   <!-- <div class="form-group">
	    				   	<div class="col-xs-12">
							   <select name="users_role" id="" value="<?php echo isset($users_role) ? $users_role : '' ?>" required>
									<option value="">veuillez choisir un rôle</option>
									<option value="architecte">architecte</option>
									<option value="agent">agent</option>
									<option value="entreprise">entreprise</option>
									<option value="utilisateur">utilisateur</option>
								</select>	
								
	    				   	</div>
	    				   </div>  	 -->
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi1">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>

                        <br>

                        <form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UNE ENTREPRISE IMMOBILIER</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="id_entreprise">id_entreprise </label>
								<input type="text" name="id_entreprise" class="form-control"  placeholder="<?php echo 'votre id_architecte ';?>" autocomplete="on" value=""
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="nom">nom:</label>
                            <input type="text" name="nom" class="form-control"  placeholder="<?php echo 'votre nom ';?>" autocomplete="on" value="<?php echo isset($prenom) ? $prenom : '' ?>"
                            required>	
                            <p><?php echo isset($error['nom']) ? $error['nom'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="matricule">matricule:</label>
								<input type="text" name="matricule" class="form-control" placeholder="votre matricule" 
								value="<?php echo isset($matricule) ? $matricule : '' ?>" required>	
								<p><?php echo isset($error['matricule']) ? $error['matricule'] : '' ?></p>
								</div>
	    				   </div>	
	    				  
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi3">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>

                         <br>

						<form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UN RECRUTEUR</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="id_agentimmobilier">id_agentimmobilier </label>
								<input type="text" name="id_agentimmobilier" class="form-control"  placeholder="<?php echo 'votre id_agentimmobilier ';?>" autocomplete="on" value=""
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="id_entreprise">id_entreprise:</label>
                            <input type="text" name="id_entreprise" class="form-control"  placeholder="<?php echo 'votre id_entreprise ';?>" autocomplete="on" value=""
                            required>	
                            <p><?php echo isset($error['id_entreprise']) ? $error['id_entreprise'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="date">date:</label>
								<input type="datetime-local" name="date" class="form-control" placeholder="veuillez mettre la date" 
								value="<?php echo isset($date) ? $date : '' ?>" required>	
								<p><?php echo isset($error['date']) ? $error['date'] : '' ?></p>
								</div>
	    				   </div>	
	    				  
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi4">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>

                        <br>

						<form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UN APPEL D'OFFRE</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="id_offre">id_offre </label>
								<input type="text" name="id_offre" class="form-control"  placeholder="<?php echo 'votre id_offre ';?>" autocomplete="on" value=""
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="libelle">libelle:</label>
                            <input type="text" name="libelle" class="form-control"  placeholder="<?php echo 'votre libelle ';?>" autocomplete="on" value=""
                            required>	
                            <p><?php echo isset($error['libelle']) ? $error['libelle'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="prix">prix:</label>
								<input type="text" name="prix" class="form-control" placeholder="veuillez mettre le prix" 
								value="<?php echo isset($prix) ? $prix : '' ?>" required>	
								<p><?php echo isset($error['prix']) ? $error['prix'] : '' ?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="criteres">criteres:</label>
								<input type="text" name="criteres" class="form-control" placeholder="veuillez mettre le critere" 
								value="<?php echo isset($criteres) ? $criteres : '' ?>" required>	
								<p><?php echo isset($error['criteres']) ? $error['criteres'] : '' ?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="id_chefchantier">id_chefchantier:</label>
								<input type="text" name="id_chefchantier" class="form-control" placeholder="veuillez mettre la id_chefchantier" 
								value="<?php echo isset($id_chefchantier) ? $id_chefchantier : '' ?>" required>	
								<p><?php echo isset($error['id_chefchantier']) ? $error['id_chefchantier'] : '' ?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="id_architecte">id_architecte:</label>
								<input type="text" name="id_architecte" class="form-control" placeholder="veuillez mettre la id_architecte" 
								value="<?php echo isset($id_architecte) ? $id_architecte : '' ?>" required>	
								<p><?php echo isset($error['id_architecte']) ? $error['id_architecte'] : '' ?></p>
								</div>
	    				   </div>	
	    				  
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi5">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>

						 <br>

						<form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UNE LOCALITER</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="date">date </label>
								<input type="datetime-local" name="date" class="form-control"  placeholder="<?php echo 'votre date ';?>" autocomplete="on" value=""
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="prix">prix:</label>
                            <input type="text" name="prix" class="form-control"  placeholder="<?php echo 'votre prix ';?>" autocomplete="on" value=""
                            required>	
                            <p><?php echo isset($error['prix']) ? $error['prix'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="ville">ville:</label>
								<input type="text" name="ville" class="form-control" placeholder="veuillez mettre le ville" 
								value="<?php echo isset($ville) ? $ville : '' ?>" required>	
								<p><?php echo isset($error['ville']) ? $error['ville'] : '' ?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="quartier">quartier:</label>
								<input type="text" name="quartier" class="form-control" placeholder="veuillez mettre le critere" 
								value="<?php echo isset($quartier) ? $quartier : '' ?>" required>	
								<p><?php echo isset($error['quartier']) ? $error['quartier'] : '' ?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="id_agentimmobilier">id_agentimmobilier:</label>
								<input type="text" name="id_agentimmobilier" class="form-control" placeholder="veuillez mettre la id_agentimmobilier" 
								value="<?php echo isset($id_agentimmobilier) ? $id_agentimmobilier : '' ?>" required>	
								<p><?php echo isset($error['id_agentimmobilier']) ? $error['id_agentimmobilier'] : '' ?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="id_maison">id_maison:</label>
								<input type="text" name="id_maison" class="form-control" placeholder="veuillez mettre la id_maison" 
								value="<?php echo isset($id_maison) ? $id_maison : '' ?>" required>	
								<p><?php echo isset($error['id_maison']) ? $error['id_maison'] : '' ?></p>
								</div>
	    				   </div>	
	    				  
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi6">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>

                         <br>

						<form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
                                                <h1>ENREGISTRER UNE MAISON</h1>
					   
	    				   <div class="form-group">

								<div class="col-xs-12">
									<label for="id_maison">id_maison </label>
								<input type="text" name="id_maison" class="form-control"  placeholder="<?php echo 'votre id_maison ';?>" autocomplete="on" value=""
								 required>	
								

								</div>
	    				   </div>  
						
                           <div class="form-group">

                            <div class="col-xs-12">
                                <label for="numero">numero:</label>
                            <input type="text" name="numero" class="form-control"  placeholder="<?php echo 'votre numero ';?>" autocomplete="on" value=""
                            required>	
                            <p><?php echo isset($error['numero']) ? $error['numero'] : '' ;?></p>

                            </div>
                            </div>  
                                                
						  
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="proprietaire">proprietaire:</label>
								<input type="text" name="proprietaire" class="form-control" placeholder="veuillez mettre le proprietaire" 
								value="<?php echo isset($proprietaire) ? $proprietaire : '' ?>" required>	
								<p><?php echo isset($error['proprietaire']) ? $error['proprietaire'] : '' ;?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="fichier">fichier:</label>
								<input type="text" name="fichier" class="form-control" placeholder="veuillez mettre le critere" 
								value="<?php echo isset($fichier) ? $fichier : '' ?>" required>	
								<p><?php echo isset($error['fichier']) ? $error['fichier'] : '' ;?></p>
								</div>
	    				   </div>	


						   <div class="form-group">
								<div class="col-xs-12">
								<label for="images">images:</label>
								<input type="file" name="images" class="form-control" placeholder="veuillez mettre la images" 
								value="<?php echo isset($images) ? $images : '' ?>" required>	
								<p><?php echo isset($error['images']) ? $error['images'] : '' ;?></p>
								</div>
	    				   </div>	


	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi7">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>
    
    
</body>
</html>