
 <?php
  session_start();

  $bd = new PDO('mysql:host=localhost;dbname=bd_immogest;charset=utf8;', 'root', '');

  if (isset($_POST['envoi'])) {
    if (!empty($_POST['matricule']) AND !empty($_POST['nom'])) {

        $matricule = htmlspecialchars($_POST['matricule']);
        $nom = htmlspecialchars($_POST['nom']);

        $recupUser = $bd->prepare('SELECT * FROM  entreprise_immobilier WHERE matricule = ? AND nom = ?');
            $recupUser->execute(array($matricule, $nom));
            if ($recupUser->rowCount() > 0) {
                $_SESSION['matricule'] = $matricule;
                $_SESSION['nom'] = $nom;
                $_SESSION['id_user'] = $recupUser->fetch()['id_user'];
                header('location: index.php');

         }else{
            echo "votre nom ou votre matricule est incorrect";
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
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <title>Connexion</title>
</head>
<body>
   
    <form action = "" method="post"> 
        <h1>Se Connecter <br>à mon espace entreprise.</h1>
        <div class="social-media">

            <!--<p><i class="fa-brands fa-google"></i></p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p>-->

        </div>
        <p class="">le nom de l'entreprise immobilier:</p>

        <div class="input">
            
            <input type="text" name="nom" placeholder="nom" required ="required" autocomplete="off"></br>
            
            <input type="text" name="matricule" id="matricule" placeholder="matricule" required = "required" autocomplete="off">
        </div>
        <p class="oublier"><a href="#"> Mot de passe oublier</a></p>
        <p class="incription" style="color: #FFFFFF;">Je n'ai pas de <span>compte</span>. Je m'en <a href="http://">Crée</a><span class="fa fa">
         </span> un.</p>
        <div>
            <button type="submit" name="envoi" style="background: #008000;
	 color: #FFFFFF;">Se connecter</button>
        </div></br>
       
              
            
    </form>
    
</body>
</html>