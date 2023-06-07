<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title> LAYA - Accueil </title>
  <link rel="stylesheet" type="text/css" href="styles_accueil.css" />
  <link rel="icon" type="image/png" sizes="16x16" href="Images/Canapé.png">
</head>

<body onload="openPopupco2()">
  <header>
    <section class="section1">
      <aside>
        <div class="titre1"><a href="Index.html">Laya</a></div>
      </aside>
      <nav>
        <ul>
          <li onclick="openPopupins()" id="btnPopupins" class="btnPopupins">S'inscrire</li>
          <div id="overlayins" class="overlayins">
            <div id="popupins" class="popupins">
              <div class="titre3">
                Inscription
                <span onclick="closePopupins()" id="btnCloseins" class="btnCloseins" style="margin-top: -41px;">&times;</span>
              </div><br /><br />
              <form action="Inscription.php" method="POST">
                <div class="texte1">Nom de compte</div>
                <p align=center><input type="text" name="LOGIN" placeholder="Entrez votre nom de compte" size="50" required=""></p><br />
                <div class="texte1">Mot de passe</div>
                <p align=center><input type="password" name="PASS" placeholder="Entrez votre mot de passe" size="50" required=""></p><br />
                <p align=center><input type="submit" id="submit" value="S'inscrire" class="bouton"></p>
              </form>
              <p align=center class="login" onclick="closePopupins() & openPopupco()">Vous avez déjà un compte ? Connectez-vous !</p>
            </div>
          </div>
          <li onclick="openPopupco()" id="btnPopupco" class="btnPopupco">Se Connecter</li>
          <div id="overlayco" class="overlayco">
            <div id="popupco" class="popupco">
              <div class="titre3">
                Connexion
                <span onclick="closePopupco()" id="btnCloseco" class="btnCloseco" style="margin-top: -41px;">&times;</span>
              </div><br /><br />
              <form action="Connexion.php" method="POST">
                <div class="texte1">Nom de compte</div>
                <p align=center><input type="text" name="NDC" placeholder="Entrez votre nom de compte" size="50" required=""></p><br />
                <div class="texte1">Mot de passe</div>
                <p align=center><input type="password" name="MDP" placeholder="Entrez votre mot de passe" size="50" required=""></p><br />
                <p align=center><input type="submit" id="submit" value="Se Connecter" class="bouton"></p>
              </form>
              <p align=center class="register" onclick="closePopupco() & openPopupins()">Pas de Compte ? Créez un compte !</p>
            </div>
          </div>
        </ul>
      </nav>
    </section>
  </header>
  <!-- Connexion à la base de données -->
  <?php
  $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', 'root');
  ?>

  <!-- Préparation de la requête d'écriture -->

  <?php
  $reponse = $bdd->query('SELECT * FROM passwords');
  ?>
  <section class="section2">
    <aside class="zone1">
      <img src="Images/Salon.jpeg" height="625" width="925" border="3" style="border-radius: 25px; box-shadow: 10px 10px 20px black;">
    </aside>
    <aside class="zone2">
      <div class="texte2">
        Notre entreprise LAYA, concepteur de canapé depuis 1980, à l'occasion de vous présenter le premier canapé connecté avec table basse intégrée au monde !<br />
        <br />Un canapé de haute technologie, sortez ou rentrez votre table basse quand vous le souhaitez, changer la couleur des lumières du canapé pour vous mettre dans une ambiance chaleureuse !<br />
        <br />Un canapé entièrement connecté, contrôlé le depuis votre smartphone ou votre<br /> ordinateur !<br />
        <br />Peur que vos enfants ou vos invités se fassent faucher par la table lors de sa sortie ? Ne vous inquiétez pas, on a tout prévu, la table s'arrêtera automatiquement en cas de présence !<br />
        <br />Vous ne voulez pas que vos enfants jouent avec le bouton de sortie et de rentrer de la table ? Ne vous inquiétez pas, on a encore tout prévu ! Verrouillez ou déverrouillez le bouton manuel du canapé depuis votre smartphone ou votre ordinateur !<br />
        <br />Votre table basse n'est pas assez haute ? Relevez là en la déclipsant !<br />
        <br />Commandez dès maintenant notre canapé au prix exceptionnel de 3500€ !
      </div>
    </aside>
  </section>
  <div id="overlayco2" class="overlayco2">
    <div id="popupco2" class="popupco2">
      <!-- Execute la requete avec les champs issus du formulaire -->
      <?php
      $ident_OK = false;
      while ($donnees = $reponse->fetch()) {
        if ($_POST['NDC'] == $donnees['LOGIN'] and $_POST['MDP'] == $donnees['PASS']) {
          $ident_OK = true;
        }
      }
      ?>
      <?php
      if ($ident_OK) {
      ?>
        <div class="titre3">Connexion réussie !</div><br /><br />
        <div class="texte1">Vous êtes connecté(e) !</div>
        <div class="texte1">Bienvenue <div style="color:purple"><?php echo ($_POST['NDC']); ?></div>
        </div><br /><br />
        <p align=center><a href="Gestion.php" class="bouton">Accédez à l'interface de gestion</a></p>
      <?php
      } else {
      ?>
        <div class="titre3">Connexion échouée !</div><br /><br />
        <div class="texte1" style="color:red">Nom de compte ou mot de passe incorrect !</div><br /><br />
        <p align=center><a href="Accueil.html" class="bouton">Réessayer</a></p>
      <?php
      }
      ?>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>