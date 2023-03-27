<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"/> 
    <title> LAYA - Gestion </title>
    <link rel="stylesheet" type="text/css" href="styles_gestion.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="Images/Canapé.png"> 
  </head>
<body>
  <header>
  <section class="section1">
    <aside>
      <div class="titre1"><a href="Index.html">Laya</a></div>
    </aside>
    <nav>
      <ul>
        <li onclick="openPopup()" id="btnPopup" class="btnPopup">Application Mobile</li>
          <div id="overlay" class="overlay">
          <div id="popup" class="popup">
          <div class="titre3">
          Code d'identification
          <span onclick="closePopup()" id="btnClose" class="btnClose" style="margin-top: -2px;">&times;</span>
          </div>
          <div class="texte2">
          Votre mot de passe pour vous connectez à l'application mobile est :<br/>
          aze
          </div>
          </div>
          </div>
        <li onclick="openAide()" id="btnPopup"><a href="#">Aide</a></li>
          <div id="overlayaide" class="overlayaide">
          <div id="popupaide" class="popupaide">
          <div class="titre3">
          Support
          <span onclick="closeAide()" id="btnClose" class="btnClose" style="margin-top: -2px;">&times;</span>
          </div>
          <div class="texte2">
          En cas de problème d'utilisation ou de fonctionnement du produit,<br/> nous vous invitons à nous contacter à l'adresse mail suivante :<br/>
          laya_support@gmail.com
          </div>
          </div>
          </div>
        <li><a href="Index.html">Se déconnecter</a></li>
      </ul>
    </nav>
  </section>
  </header>
  <section class="section2">
    <aside class="securite_enfant">
      <div class="titre2">Sécurité Enfant</div><br/><br/>
      <p align="center"><a href="#" class="bouton1">Verouiller le bouton</a></p><br/><br/>
      <p align="center"><a href="#" class="bouton1">Déverouiller le bouton</a></p><br/><br/>
      <p align="center"><img src="Images/Feu_Vert.png" width="250" height="250" class="photo"></p>
    </aside>
    <section class="section3">
      <aside class="activation">
        <p align="center"><a href="#" class="bouton2">Sortir la Table</a></p><br/>
        <p align="center"><a href="#" class="bouton2">Rentrer la Table</a></p><br/>
        <p class="texte2">La Table est rentrée !</p>
        <p class="texte2">La Table est en position haute !</p>
      </aside>
      <aside class="etat">
        <div class="titre2">Etat du système du Canapé</div><br/>
        <p class="texte1">• Aucune panne n'a été détectée dans le système !</p>
        <p class="texte1">• Aucune présence ne dérange la rentrée/sortie de la table !</p>
      </aside>
    </section>
    <aside class="led">
      <div class="titre2">Gestion LED</div><br/><br/>
      <p align="center"><a href="#" class="bouton1">Allumer la lumière</a></p><br/><br/>
      <p align="center"><a href="#" class="bouton1">Eteindre la lumière</a></p><br/><br/>
      <p align=center><input type="color" value="#0A74FF"></p>
    </aside>
  </section>
  <script src="script.js"></script>
</body>
</html>