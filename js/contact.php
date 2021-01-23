<?php
    session_start();
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Empreintes Digitales | Contactez-nous !</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css">
        <script src="https://kit.fontawesome.com/0075e21f22.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./js/menuHamburger.js" defer></script>
        <link href="./css/jquery-backToTop.css" rel="stylesheet" type="text/css">
        <script src="./js/jquery-backToTop.js" defer></script>
        <link rel="icon" type="image/png" href="./img/empreintes-digitales-favicon.png">
    </head>
    <body>
        <header id="mainHeader">
            <img src="img/empreintes-digitales-logo.jpg" alt="">
            <nav>
                <a href="./index.html" class="uppercase">Accueil</a>
                <a href="./siteVitrine.html" class="uppercase">Sites vitrines</a>
                <a href="./siteEcommerce.html" class="uppercase">Sites e-commerces</a>
                <a href="./collaboration.html" class="uppercase">Collaboration</a>
                <a href="./contact.php" class="uppercase">Contact</a>
                <div id="menuToggle">
                    <div class="iconsHmaburger js-toggle-menu">
                        <span></span>
                        <span></span>
                        <span></span> 
                    </div> 
                    <div class="mobileNav mobile-header-nav"> 
                        <ul>
                            <li><a href="./index.html" class="uppercase">Accueil</a></li>
                            <li><a href="./siteVitrine.html" class="uppercase">Sites vitrines</a></li>
                            <li><a href="./siteEcommerce.html" class="uppercase">Sites e-commerces</a></li>
                            <li><a href="./collaboration.html" class="uppercase">Collaboration</a></li>
                            <li><a href="./contact.php" class="uppercase">Contact</a></li>
                        </ul>
                    </div>     
                  </div>
            </nav>
        </header>
        <main id="contactPage" class="allPages">
            

            <form action="./php/post_contact.php" method="POST">
                <h1>Que pouvons nous faire pour vous ?</h1>
                <div class="contactInformations">
                    <label for="name">Bonjour, mon nom est</label>
                    <input required type="text" id="name" name="name" placeholder="votre nom complet" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>" />
                    <p>et je voudrais discuter d'un projet potentiel.</p>
                    <br>
                    <label for="mail">Pouvez vous me contacter par email :</label>
                    <input required id="mail" type="email" name="email" placeholder="votre email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"/>
                    <label for="tel">ou m'appeler au :</label>
                    <input id="tel" type="tel" name="tel" placeholder="votre N° de téléphone" value="<?= isset($_SESSION['inputs']['telephone']) ? $_SESSION['inputs']['telephone'] : ''; ?>"/>
                </div>
                <div class="contactProjet">
                    <p>Je suis intéressé par :</p>
                    <span>
                        <input name="service" type="radio" id="siteVitrine" class="radioInput" value="0"/>
                        <label for="siteVitrine" class="secondaryButton">Site Vitrine</label>
                    </span>
                    <span>
                        <input name="service" type="radio" id="siteEcommerce" class="radioInput" value="1"/>
                        <label for="siteEcommerce" class="secondaryButton">Site Ecommerce </label>
                    </span>
                    <span>
                        <input name="service" type="radio" id="autres" class="radioInput" value="2"/>
                        <label for="autres" class="secondaryButton">Audit</label>
                    </span>
                    <br>
                </div>
                <div class="contactInfosSupp">
                    <label for="message">Quelques informations sur mon projet :</label>
                    <textarea required name="message" id="informations" placeholder="mon projet concerne"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    <br>
                </div>
                <span class="checboxRGPD">
                    <input type="checkbox" name="rgpd" id="rgpd" required>
                    <label for="rgpd">En cochant cette case vous acceptez la politique de confidentialité du site</label>
                </span>
                <input type="submit" value="Envoyer" class="uppercase primaryButton" />
            </form>
            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php unset($_SESSION['errors']); endif; ?>
            <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email a bien été envoyé
                </div>
            <?php unset($_SESSION['errors']); endif; ?>
        </main>
        <footer>
            <div class="primaryFooter">
                <nav class="secondaryNav">
                    <a href="./index.html" class="uppercase">Accueil</a>
                    <a href="./siteVitrine.html" class="uppercase">Sites vitrines</a>
                    <a href="./siteEcommerce.html" class="uppercase">Sites e-commerces</a>
                    <a href="./collaboration.html" class="uppercase">Collaboration</a>
                    <a href="./contact.php" class="uppercase">Contact</a> 
                </nav>
                <nav class="legallyNav">
                    <a href="#" class="uppercase">Mentions Légales</a>
                    <a href="#" class="uppercase">Cookies</a>
                    <a href="#" class="uppercase">Politique de confidentialité</a>
                </nav>
                <div>
                <a href="mailto:empreintesdigitales56@gmail.com">contact@empreintesdigitales.fr</a>
                </div>
            </div>
            <div class="secondaryFooter">
                <p class="uppercase">Imaginé et conçu par Empreintes Digitales</p>
            </div>
        </footer>
        <script type="text/javascript">
            jQuery(function($){
                var $button = $.backToTop({
                    enabled:true, 
                    theme:'fawesome', 
                    effect:'spin', 
                    backgroundColor:'#671751', 
                    color:'white', 
                    width: '40', 
                    height:'40',
                });
            });
        </script>
    </body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>