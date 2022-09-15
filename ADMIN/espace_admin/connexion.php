
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
            echo "votre mot de passe ou email est incorrect";
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
    <title>Espace Admin</title>
</head>
<body>
    <h1>Ma page Admin</h1>
    <form action = "" method="post"> 
        <h1> Se Connecter</h1>
        <div class="social-media">

            <p><i class="fa-brands fa-google"></i></p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p>

        </div>
        <p class="choose-email">adresse e-mail et le mot de passe:</p>

        <div class="input">
            <input type="text" name="email" placeholder="Email" required ="required" autocomplete="off"></br>
            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required = "required" autocomplete="off">
        </div>
        <p class="oublier"><a href="#"> Mot de passe oublier</a></p>
        <p class="incription">Je n'ai pas de <span>compte</span>. Je m'en <span class="fa fa">
         </span> un.</p>
        <div>
            <button type="submit" name="envoi" style="background: #008000;
	 color: #FFFFFF;">Se connecter</button>
        </div></br>
       
              
            
    </form>
    
</body>
</html>