
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
            echo "votre nom ou votre mot de passe est incorrect";
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
    <title>Connexion</title>
</head>
<body>
    <h1>Mon espace entreprise</h1>
    <form action = "" method="post"> 
        <h1> Se Connecter</h1>
        <div class="social-media">

            <p><i class="fa-brands fa-google"></i></p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p>

        </div>
        <p class="choose-email">le nom de l'entreprise immobilier:</p>

        <div class="input">
            <input type="text" name="nom" placeholder="nom" required ="required" autocomplete="off"></br>
            <input type="password" name="matricule" id="matricule" placeholder="matricule" required = "required" autocomplete="off">
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