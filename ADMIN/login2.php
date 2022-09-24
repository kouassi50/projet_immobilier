<?php
  session_start();

$bd = new PDO('mysql:host=localhost;dbname=bd_immogest;charset=utf8;', 'root', '');

  if (isset($_POST['envoi'])) {
    if (!empty($_POST['mot_de_passe']) AND !empty($_POST['email'])) {

        $mot_de_passe = sha1($_POST['mot_de_passe']);
        $email = htmlspecialchars($_POST['email']);

        $recupUser = $bd->prepare('SELECT * FROM users WHERE mot_de_passe = ? AND email = ?');
            $recupUser->execute(array($mot_de_passe, $email));
            if ($recupUser->rowCount() > 0) {
                $_SESSION['mot_de_passe'] = $mot_de_passe;
                $_SESSION['email'] = $email;
                $_SESSION['id_user'] = $recupUser->fetch()['id_user'];
                header('location: index.php');

         }else{
            echo "votre email ou votre mot de passe est incorrect";
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
    <link rel="stylesheet" href="login2.css">
    <script src="login2.js"></script>
    <title>Connexion</title>
</head>
<body>
    
    
    <form action = "" method="post"> 
        <h1> Ma page Connexion</h1>
        <div class="social-media">
        
           <!-- <p><i class="fa-brands fa-google"></i></p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p> -->

        </div>
        <p class="choose-email">Saisissez l'adresse e-mail et le mot de passe:</p>

        <div class="input">
       
            <input type="email" name="email" placeholder="Email" required ="required" autocomplete="off"></br>
            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Mot de passe" required = "required" autocomplete="off">
        </div>
        <p class="oublier"><a href="#"> Mot de passe oublier</a></p>
        <p class="incription" style="color:#FFFFFF;">Je n'ai pas de <span>compte</span>. Je m'en <span class="fa fa"><a href="" style="color:red;">Crée</a>
         </span> un.</p>
        <div>
            <button type="submit" name="envoi" style="background: #008000;
	 color: #FFFFFF;">Se connecter</button>
        </div></br>
       
              
            
    </form>
    
</body>
</html>