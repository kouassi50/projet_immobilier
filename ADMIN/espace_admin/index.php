<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location: connexion.php');
}
$bd = new PDO('mysql:host=localhost;dbname=bd_immogest;charset=utf8;', 'root', '');
// controler enregistrement architecte
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

// chef chantier
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

  //entreprise immobilier
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






?>

                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Inscription</title>
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
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoi3">enregistrer
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>
    
</body>
</html>