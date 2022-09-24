
<?php
  session_start();
  
  if (isset($_POST['envoi'])) {
    if (!empty($_POST['mot_de_passe']) AND !empty($_POST['email'])) {
        $email_par_defaut = "admin@kouassi";
        $mdp_par_defaut = "admin1234";

        $mdp = htmlspecialchars($_POST['mot_de_passe']);
        $email = htmlspecialchars($_POST['email']);

        if ($email == $email_par_defaut AND $mdp == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp;
            header('Location: index.php');
            
        }else{
            echo "<h2 style=color:red>votre mot de passe ou email est incorrect</h2>";
        }
    }else{
            echo "veuillez complêter tous les champs.....";
        }

 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <script src="connexion.js"></script>
    <title>Espace Admin</title>
</head>
<body>
    
    <form action = "" method="post"> 
        <h1> Se Connecter a admin.</h1>
        <div class="social-media">
        </div>
        <p class="choose-email">adresse e-mail et le mot de passe:</p>

        <div class="input">
            <input type="text" name="email" placeholder="Email" required ="required" autocomplete="off"></br>
            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required = "required" autocomplete="off">
        </div>
        <p class="oublier"><a href="#"> Mot de passe oublier</a></p>
        <p class="incription" style="color: #FFFFFF;">Je n'ai pas de <span>compte</span>. Je m'en <a href="">Crée</a><span class="fa fa">
         </span> un.</p>
        <div>
            <button type="submit" name="envoi" style="background: #008000;
	 color: #FFFFFF;">Se connecter</button>
        </div></br>
       
              
            
    </form>
    
</body>
</html>