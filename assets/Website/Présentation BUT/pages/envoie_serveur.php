<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <link rel="icon" type="image/png" sizes="16x16" href="../images/logo_onglet.png">
        <title>IUT Lyon 1 - Envoi formulaire</title>
    </head>
    <body>
        <header>
            <img src="../images/logo_iut2.png" alt="Logo de l'IUT">

            <h1>BUT Informatique La Doua</h1>
            <a href="https://iut.univ-lyon1.fr/" target="_blank">Site de l'IUT</a>
        </header>
        <nav>
            <a href="../index.html">Accueil</a>
            <a class="border" href="faq.html">Questionnaire</a>
            <a href="presentation_campus.html">Présentation campus</a>
        </nav>
        <main>
            <section id="content">
                <h2>Envoi réussi !</h2>
                <p>
                    Bonjour <?php echo ($_POST['surname']); echo (' '); echo ($_POST['name']); ?>,<br/><br/>
                    l'envoie du formulaire a été effectué avec succès, la question que vous avez posée est la suivante :<br/><br/>
                    <?php echo ($_POST['question']);?><br/><br/>
                    Une réponse vous sera envoyée dans un délai de 48h à l'adresse mail suivante :<br/><br/>
                    <?php echo ($_POST['email']);?><br/><br/>
                    Si vous ne recevez pas de réponse après le délai de 48h, nous vous invitons à envoyer de nouveau le formulaire<br/>
                    de la page questionnaire de notre site web, dans le cas contraire nous espèrons avoir répondu à votre question.<br/><br/>
                    Si vous souhaitez continuer de naviguer sur notre site web, vous pouvez cliquer sur le bouton sous ce message ou<br/>
                    dans l'en-tête du site pour aller à la page souhaitée.<br/><br/>
                    Nous vous remercions d'avance.<br/>
                    Respectueusement,<br/>
                    la direction.<br/>
                </p>
                <p class="button"><a href="../index.html">Retour à l'accueil</a></p>
            </section>
        </main>
        <footer>
            <div id="images">
                <a href="https://www.facebook.com/UnivLyon1" target="_blank">
                    <img src="../images/facebook.png" alt="Lien vers le Facebook de l'Université Lyon 1">
                </a>
                
                <a href="https://www.twitter.com/UnivLyon1" target="_blank">
                    <img src="../images/twitter.png" alt="Lien vers le Twitter de l'Université Lyon 1">
                </a>
    
                <a href="https://www.youtube.com/UnivLyon1" target="_blank">
                    <img src="../images/youtube.png" alt="Lien vers le YouTube de l'Université Lyon 1">
                </a>
    
                <a href="https://www.instagram.com/univlyon1" target="_blank">
                    <img src="../images/instagram.png" alt="Lien vers le Instagram de l'Université Lyon 1">
                </a>
            </div>
            <p>© 2021 BORIE Yanis, LE GALL Bastien.</p>
        </footer>

    </body>
</html>