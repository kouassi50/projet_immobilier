
<?php include('includes/db.php'); ?>
<?php

if(isset($_GET['envoyer']) && !empty($_GET['envoyer'])){

$_SESSION['envoyer'] = $_GET['envoyer'];

if(isset($_SESSION['envoyer']) && $_SESSION['envoyer'] != $_GET['envoyer']){

	echo "<script type='text/javascript'> location.reload(); </script>";

}

}

if(isset($_SESSION['envoyer'])){

include "includes".$_SESSION['envoyer']."login.php";

} else {

}

$options = array(
'cluster' => 'us2',
'encrypted' => true
);
// AUTHENTICATION

if($_SERVER['REQUEST_METHOD'] == "POST") {

$username = trim($_POST['nom']);
$email    = trim($_POST['prenom']);
$password = trim($_POST['password']);
$password = trim($_POST['telephone']);
$password = trim($_POST['matricule']);
$password = trim($_POST['email']);
$password = trim($_POST['users_role']);

$error = [

	'nom'=> '',
	'prenom'=>'',
	'password'=>'',
	'telephone'=>'',
	'matricule'=>'',
	'email'=>'',
	'users_role'=>'',

];


if(strlen($nom) < 4){

	$error['nom'] = 'Le nom d\'utilisateur doit être plus long';
}

 if($nom ==''){

	$error['nom'] = 'Le nom d\'utilisateur ne peut pas être vide';
}

 if(nom_exists($nom)){

	$error['nom'] = 'Le nom d\'utilisateur existe déjà, choisissez-en un autre';

}

if($email ==''){

	$error['email'] = 'Email ne peux pas être vide';

}

 if(email_exists($email)){

	$error['email'] = 'Email existe dejà, <a href="login.php">Veuillez vous connecter</a>';

}

if($password == '') {

	$error['password'] = 'Le mot de passe ne peut pas être vide';
}

foreach ($error as $key => $value) {
	
	if(empty($value)){

		unset($error[$key]);

	}

} // foreach

if(empty($error)){

	register_user($nom, $prenom, $password, $telephone, $matricule, $email, $users_role);

	$data['message'] = $email;

	$pusher->trigger('notifications', 'new_user', $data);

	login_user($username, $password);

}

} 

?>

<!-- Navigation -->

<?php  include "includes/navigation.php"; ?>

<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
<!-- Stylesheets -->
  
<!-- Icons & Fonts -->
    
	<link rel="stylesheet" href="style.css">
	<script src="register.js"></script>
<!-- Icons & Fonts -->
	<title>Page Inscription</title>
</head>
<body>

   <style>
	html{
		font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
	}

    body{
		background: #800000;
		
		/*border: 12px solid #800000;*/
	}

	.box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: white;
  margin: 30px auto;
  width: 360px;
}

 h1.box-logo a {
  text-decoration:none;
}

 h1.box-title {
  color: #AEAEAE;
  background: #f8f8f8;
  font-weight: 300;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  text-align:center;
  margin: -27px -26px 26px;
}
.box-button {
 
  background: #d2483c;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  width: 100%;
  height: 51px;
  padding: 0;
  color: #fff;
  border: 0;
  outline:0;
}
.box-register
{
  text-align:center;
  margin-bottom:0px;
}
.box-register a
{
  text-decoration:none;
  font-size:12px;
  color:#666;
}
.box-input {
 
}
.label input {
	padding: 8px;
    border: 9px;
	width: 347px;
    height: 50px;
    outline: none;
    border-color:#5c7186;
}
.sucess{
	text-align: center;
	color: white;
}
  button a {
	font-size: 18px;
	text-decoration: none;
	color: #008000;
}
  
  span a{
	text-decoration: none;
	color: #FF0000;
  }

 p.errorMessage {
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
   
  }


 form{
	border-radius: 3px;
	font-size: 20px;
	margin-left: 35px;
	
 }

   select option{
	font-size: 22px;
   }
     
   h1{
	 background: #800000;
	 color: #FFFFFF;
   }

   </style>

   



<div id="contact" class="container-fluid second-theme-contact">

    	<div class="container">
    		<div class="second-theme-title">
			
    		</div>
    		<div class="row">
    			<div class="">
    			    <div class="box">
	    				<form role="form" class="form-horizontal" action="register.php" method="POST" autocomplete="off">
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
								<input type="password" name="password" class="form-control" placeholder="votre mot de passe" 
								value="<?php echo isset($password) ? $password : '' ?>" required>	
								 
								  <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
								</div>
	    				   </div>
						   <div class="form-group">
								<div class="col-xs-12">
								<label for="telephone">Telephone:</label>
								<input type="tel" name="telephone" class="form-control" placeholder="votre numero de telephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
								value="<?php echo isset($telephone) ? $telephone : '' ?>" required>	
								<p><?php echo isset($error['telephone']) ? $error['telephone'] : '' ?></p>
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
							   <select name="users_role" id="" value="<?php echo isset($users_role) ? $users_role : '' ?>" required>
									<option value="">veuillez choisir un rôle</option>
									<option value="architecte">architecte</option>
									<option value="agent">agent</option>
									<option value="entreprise">entreprise</option>
									<option value="utilisateur">utilisateur</option>
								</select>	
								<p><?php echo isset($error['users_role']) ? $error['users_role'] : '' ?></p>
	    				   	</div>
	    				   </div>  	
	    				   <div class="form-group">
	    				   	<div class="col-xs-12">
	    				   	   	
	    				   	   <button type="submit" class="btn btn-success" name="envoyer"><a href="login.php">Enregistrer</a>
							   <i class="fa fa-send"></i></button>
							   <span class="registerLink">Avez-vous  dejà un compte ? <a href="login.php">login</a>
	    				   	</div>
	    				   </div> 
						    	
	    				</form>
    				</div>

					<?php

					

					?>

					<!--let us register a new account to the database and later login with the same account!-->
					
					<?php
					if (isset($_POST['envoyer'])) {

						//variable....
                        $Nom = $_POST['nom'];
						$Prenom = $_POST['prenom'];
						$Email = $_POST['email'];
						$Mot_de_passe = $_POST['password'];
						$Telephone = $_POST['telephone'];
						$Matricule = $_POST['matricule'];
						$users_role = $_POST['user_role'];

						//state out query..
						$sql = "INSERT INTO admin SET
							nom = '$Nom',
							prenom = '$Prenom',
							email = '$Email',
							password = '$Mot_de_passe',
							telephone = '$Telephone',
							matricule = '$Matricule',
							user_role = '$users_role'

						";
						//execute our sql query
						$result = mysqli_query($conn, $sql);
						//check if query is executed successfully
						if ($result == true) {
							//message to show account created successfuly
							$_SESSION['accountCreated'] = '<span class="addedAccount">Account '.$userName.'created !</span>';
							header('location:' .SITEURL. 'login.php');
							exit();
						}
						else{
							//message to show that account failed to be created !.
							$_SESSION['unSuccessful'] = '<span class="fail">Account '.$userName.'fail!</span>';
							header('location:' .SITEURL. 'register.php');
							exit();

						}
					}

                    ?>


    			</div>
    			
    		</div>
    		
			
    	</div>
    </div>
			
 



	
</body>
</html>







  
      

  
