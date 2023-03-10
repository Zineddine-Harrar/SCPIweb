<?php
$db  = new mysqli ("localhost","root","","monprojet");
      if(isset($_POST['subi'])){
        if (!empty($_POST['nomcomplet']) and !empty($_POST['email']) and !empty($_POST['mdp'])){
          $nom = ($_POST['nomcomplet']);
          $email =($_POST['email']);
          $md = ($_POST['mdp']);
          $sq = "INSERT INTO utilisateurs VALUES ('$nom','$email','$md')";
  
    
          $res = $db->query($sq);
          }else{
        echo"veillez remplir";
      }
    }   
?>
<div class="container">
  <link href="style 2.css" rel="stylesheet">
      <!--Data or Content-->
      <div class="box-1">
          <div class="content-holder">
              <h2>S'inscrire</h2>
             
              
              
          </div>
      </div>

      
      <!--Forms-->
      <div class="box-2">
          <form method="post" action="">
          <div class="login-form-container">
              <h1>Inscription</h1>
          <input type="text" placeholder="Nom Complet" name="nomcomplet"class="input-field">
          <br><br>
          <input type="email" placeholder="Email"name="email" class="input-field">
          <br><br>
          <input type="password" placeholder="Mot de Passe"name="mdp" class="input-field">
          <br><br>

          <br><br>
          <button class="login-button" type="submit" name="subi"> incrire</button>
          </Form>
          </div>




      </div>