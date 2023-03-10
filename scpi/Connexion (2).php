<?php
$servername = "localhost"; // Nom du serveur MySQL en local
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "monprojet"; // Nom de la base de données MySQL

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Vérification des informations d'identification de l'utilisateur
if(isset($_POST['sub'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
   
    $query = "SELECT * FROM utilisateurs  WHERE Email='$email' AND MotDePasse='$pass'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
   
    if($count == 1){
        echo "Connexion réussie !";
        header("Location: inex.php");
        
    }
    else{
        echo "Nom d'utilisateur ou mot de passe incorrect !";
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>


<div class="container">
  <link href="style.css" rel="stylesheet">
      <!--Data or Content-->
      <div class="box-1">
          <div class="content-holder">
              <h2>Se Connecter</h2>
             
              
              <button class="button-2" onclick="login()">Connexion</button>
          </div>
      </div>

      <!--Forms-->
      <div class="box-2">
          <div class="login-form-container">
              <form method="post" action="">
              <h1>Connexion</h1>
              <input type="text" placeholder="E-mail" name="email" class="input-field">
              <br><br>
              <input type="password" placeholder="Mot de passe"  name="pass" class="input-field">
              <br><br>
              <button class="login-button" type="submit" name="sub">Connexion</button>
              </form>
          </div>






      </div>