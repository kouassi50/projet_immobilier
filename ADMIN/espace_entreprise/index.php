
<?php
 
 session_start();

$bd = new PDO('mysql:host=localhost;dbname=bd_immogest;charset=utf8;', 'root', '');
    
     if (isset($_POST['envoi'])) {
        if (!empty($_POST['id_agentimmobilier']) AND !empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['matricule']) AND !empty($_POST['domicile']) ) {
            $id_agentimmobilier = htmlspecialchars($_POST['id_agentimmobilier']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
           
            $matricule = htmlspecialchars($_POST['matricule']);
            $domicile = htmlspecialchars($_POST['domicile']);
            
            $insertAgent = $bd->prepare('INSERT INTO  agent_immobilier(id_agentimmobilier,	prenom,	nom,	matricule,	domicile)VALUES(?,?,?,?,?)');
            $insertAgent->execute(array($id_agentimmobilier,	$prenom,	$nom,	$matricule,	$domicile));
          
           

            $recupAgentimmobilier = $bd->prepare('SELECT * FROM  agent_immobilier WHERE id_agentimmobilier = ? AND prenom = ? AND	nom = ? AND matricule = ? AND domicile = ?');
            $recupAgentimmobilier->execute(array($id_agentimmobilier,	$nom,	$prenom,	$matricule,	$domicile));
            // $recupEntreprise = $bd->prepare('SELECT * FROM   entreprise_immobilier WHERE id_entreprise = ? AND nom = ? AND matricule = ?');
            // $recupEntreprise->execute(array($id_entreprise,	$nom,	$matricule));
            if ($recupEntreprise->rowCount() > 0) {
                $_SESSION['id_entreprise'] = $id_entreprise;
    
                $_SESSION['id_entreprise'] = $recupEntreprise->fetch()['id_entreprise'];
              
            }

             $id_entreprise = $_SESSION['id_entreprise']; 
            $insertRecrute = $bd->prepare('INSERT INTO  recrute(id_agentimmobilier, id_entreprise)VALUES(?,?)');
            $insertRecrute ->execute(array($id_entreprise, id_agentimmobilier));
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
	<link rel="stylesheet" href="entreprise.css">
    <title>Espace Entreprise</title>
</head>
<body>
	
<form role="form" class="form-horizontal" action="" method="POST" autocomplete="off">
						

                     <h1 style="text-align:center;"><u>ESPACE ENTREPRISE</u></h1>
					   
	    				   <div class="form-group">
						   
								<div class="col-xs-12">
									<label for="id_agentimmobilier">id_agentimmobilier:</label>
								<input type="text" name="id_agentimmobilier" class="form-control"  placeholder="<?php echo 'votre id_agentimmobilier ';?>" autocomplete="on" value="<?php echo isset($prenom) ? $prenom : '' ?>"
								 required>	
								 <p><?php echo isset($error['id_agentimmobilier']) ? $error['id_agentimmobilier'] : '' ;?></p>

								</div>
	    				   </div>  

                           <div class="form-group">
								<div class="col-xs-12">
								<label for="prenom">nom:</label>
								<input type="text" name="nom" class="form-control" placeholder="votre nom" value="<?php echo isset($nom) ? $nom : '' ?>"
								 required>	
								 <p><?php echo isset($error['nom']) ? $error['nom'] : '' ?></p>
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
								<label for="emailaddress">domicile:</label>
								<input type="text" name="domicile" class="form-control" placeholder="votre adresse domicile" value="<?php echo isset($domicile) ? $domicile : '' ?>"
								 required>
								 <p><?php echo isset($error['domicile']) ? $error['domicile'] : '' ?></p>
								</div>
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