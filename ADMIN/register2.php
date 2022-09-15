<?php
 
 session_start();

$bd = new PDO('mysql:host=localhost;dbname=bd_immogest;charset=utf8;', 'root', '');
    
     if (isset($_POST['envoi'])) {
        if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mot_de_passe']) AND !empty($_POST['telephone']) AND !empty($_POST['matricule']) AND !empty($_POST['email']) ) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $mot_de_passe = sha1($_POST['mot_de_passe']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $matricule = htmlspecialchars($_POST['matricule']);
            $email = htmlspecialchars($_POST['email']);
            $insertUser = $bd->prepare('INSERT INTO users(nom,	prenom,	mot_de_passe,	telephone,	matricule,	email)VALUES(?,?,?,?,?,?)');
            $insertUser->execute(array($nom,	$prenom,	$mot_de_passe,	$telephone,	$matricule,	$email));

            $recupUser = $bd->prepare('SELECT * FROM users WHERE nom = ? AND prenom = ? AND	mot_de_passe = ? AND telephone = ?	AND matricule = ? AND email = ?');
            $recupUser->execute(array($nom,	$prenom,	$mot_de_passe,	$telephone,	$matricule,	$email));
            if ($recupUser->rowCount() > 0) {
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['mot_de_passe'] = $mot_de_passe;
                $_SESSION['telephone'] = $telephone;
                $_SESSION['matricule'] = $matricule;
                $_SESSION['email'] = $email;
                $_SESSION['id_user'] = $recupUser->fetch()['id_user'];
              
            }

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
						<h1 style="text-align:center;"><?php echo 'PAGE INSCRIPTION' ;?></h1>
					   
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
								<label for="prenom">Prenom:</label>
								<input type="text" name="prenom" class="form-control" placeholder="votre prenom" value="<?php echo isset($prenom) ? $prenom : '' ?>"
								 required>	
								 <p><?php echo isset($error['prenom']) ? $error['prenom'] : '' ?></p>
								</div>
	    				   </div>
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="emailaddress">Email:</label>
								<input type="email" name="email" class="form-control" placeholder="votre adresse email" value="<?php echo isset($email) ? $email : '' ?>"
								 required>
								 <p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
								</div>
	    				   </div>
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="password">Mot de passe:</label>
								<input type="password" name="mot_de_passe" class="form-control" placeholder="votre mot de passe" 
								value="<?php echo isset($password) ? $password : '' ?>" required>	
								 
								 
								</div>
	    				   </div>
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="telephone">Telephone:</label>
								<input type="tel" name="telephone" class="form-control" placeholder="votre numero de telephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
								value="<?php echo isset($telephone) ? $telephone : '' ?>" required>	
								
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
								<p><?php echo isset($error['users_role']) ? $error['users_role'] : '' ?></p>
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
    
</body>
</html>