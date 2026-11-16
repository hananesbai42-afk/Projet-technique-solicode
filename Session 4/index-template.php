
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanane S'BAI</title>
    <link href="style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=JetBrains+Mono:wght@100..800&family=Red+Hat+Display:wght@300..900&display=swap"
        rel="stylesheet">
</head>

<body>

<header>
    <div class="header-container">
        <img src="images/logo simple.png" alt="Logo">

        <div class="clique">
            <a href="#">À propos</a>
            <a href="#">Compétences</a>
            <a href="#">Projets</a>
            <a href="#">Contact</a>
        </div>

        <button>Contactez moi</button>
    </div>
</header>

<div class="content">

    <div class="par1">
        <h1 class="bonjour">
            Bonjour, <br> je suis
            <span>Hanane S'BAI</span>
        </h1>

        <p>
            Développeuse Web passionnée. Je crée des sites
            internet modernes, rapides et faciles à utiliser.
        </p>

        <button>Voir mes projets</button>
        <button>Contactez-moi</button>

        <div class="git">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hananesbai42@gmail.com" target="_blank">
                <img src="images/email.png" alt="email">
            </a>

            <a href="https://github.com/hananesbai42-afk">
                <img src="images/github.png" alt="github">
            </a>
        </div>
    </div>

    <div class="profil">
        <img src="images/profil.jpg" alt="Profil">
    </div>

</div>

<section>
    <div class="about">
        <h1>À propos de moi</h1>

        <p>
            Passionnée par le code et le web design,
            j'aide les entreprises et particuliers à concrétiser leurs
            projets sur internet. Mon objectif est de
            produire un code propre, performant et facile à maintenir.
        </p>
    </div>
</section>

<section class="competences">

    <div class="container-competences">

        <h1>Mes Compétences</h1>

        <div class="icones">

            <?php foreach ($competences as $nom => $info) { ?>

                <div>

                    <img src="images/<?php echo $info['image']; ?>"
                         alt="<?php echo $nom; ?>">

                    <h2><?php echo $nom; ?></h2>

                    <span><?php echo $info['description']; ?></span>

                </div>

            <?php } ?>

        </div>

    </div>

</section>

<section class="formulaire">

    <div>
        <h1>Contactez-moi</h1>
        <img src="images/formulaire.png" alt="Formulaire">
    </div>

</section>

</body>
</html>
