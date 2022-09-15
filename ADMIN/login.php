

    <?php

      if (isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $connection = mysqli_connect('localhost', 'root', '', 'bd_immogest');

          if ($connection) {

            echo "We are connected";
           
          }else{
            die("Database connection failed");
          }
      }


   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


   <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap');

body{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #800000;
   
    
}

form{
    margin-top: 85px;
    background-color:rgb(255, 255, 255 );
    opacity: ;
    padding-bottom: 105px;
    padding-left: 105px;
    padding-right: 105px;
    margin-bottom: 0px;
    min-width: 300px;
    border-color: #000000;
   
    
}

form .social-media{
    margin-top: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
form .social-media p{
    padding: 20px;
    margin-left: 15px;
    border: 1px solid #54e;
    border-radius: 100%;
    text-align: center;
    cursor: pointer;
}
form p.choose-email{
    display: flex;
    flex-direction: column;
    padding: 15px 10px ;
    text-align: center;
}
form input{
    
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: row;
    padding: 15px;
    border-radius: 5px;
    border: none;
    background-color: #f2f2f2;
    outline: none;
    width: 260px;
}
form p.incription{
    font-size: 14px;
    margin-bottom: 20px;
    padding-top: 15px;
    color: #878787;
    text-align: center;
}
span{
    color: red;
}
form p.incription span a{
    text-decoration: none;
    color: red;
}
form p.incription span a:hover{
    color: #54e;
}
form button{
    padding: 15px 25px;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    background-color: #eb73eb;
    color: #fff;
    outline: none;
    cursor: pointer;
}
.alert-succes a{
    text-decoration: none;
}
.alert-succes a:hover{
    border-radius: 5px;
    border: 1px solid #54e;
    color: #eb73eb;
}
.alert-danger{
    text-align: center;
    padding-bottom: 10px;
}

form .oublier{
    font-size: 0.8rem;
}
form .oublier a{
    text-decoration: none;
}

form .conbtn{
    display: flex;
    justify-content: space-evenly;
}
form .btn-1{
    border:none;
    color: #fff;
    background-color: #eb73eb;
    border-radius: 5px;
    box-shadow: inset 0 0 0 0 #54e;
    transition: ease-out 0.3s;
    outline: none;
}
form .btn-1 a{
    text-decoration: none;
    color: #fff;
}
form .btn-1:hover{
    box-shadow: inset 300px 0 0 0 #54e;
    cursor: pointer;
    color: #000;
}
form .btn-2{
    border: none;
    color: #54e;
    border-radius: 5px;
    transition: ease-out 0.3s;
    outline: none;
    border: 3px solid #54e;
    background-color: #f5f5f5;
   
}
form .btn-2:hover{
    color: #eb73eb;
    cursor: pointer;
}
form .btn-2:before{
    transition: 0.5s all ease;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: "";
    background-color: #54e;
}
form .btn-2:hover:before{
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

 h3{
    text-align: center;
 }

 i.hover{
  
		
		}

		
  h1{
    text-align: center;
	 color:#000000; 
  }

   </style>
    
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
            <input type="email" name="email" placeholder="Email" required ="required" autocomplete="off"></br>
            <input type="password" name="password" id="Password" placeholder="Mot de passe" required = "required" autocomplete="off">
        </div>
        <p class="oublier"><a href="#"> Mot de passe oublier</a></p>
        <p class="incription">Je n'ai pas de <span>compte</span>. Je m'en <span class="fa fa"> <a href="register.php">  créé  </a>
         </span> un.</p>
        <div align ="center">
            <button type="submit" name="connect" style="background: #008000;
	 color: #FFFFFF;">Se connecter</button>
        </div></br>
       
                <h3 style="color:red">Identifiant Incorrect</h3>
            
    </form>
</body>
</html>

           
             