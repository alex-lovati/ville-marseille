<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/musees.css" />
    <link rel="stylesheet" type="text/css" href="header/footer/header.css" />
    <link rel="stylesheet" type="text/css" href="header/footer/footer.css" />
    <title>Accueil</title>
</head>

<body>
    <header>
        <?php include "header/footer/header.html" ?>
    </header>

    <main>
        <h1>Les Musées à Marseille</h1>
        <section id="gallery">
            <section class="section">
                <img src="https://musees.marseille.fr/sites/default/files/styles/banner_middle/public/2020-09/musee-beaux-arts.jpg?itok=OGZmEygR">
                <h2>Musée des Beaux-Arts</h2>
                <p>Palais Longchamp - 4e arrondissement</p>
            </section>

            <section class="section">
                <img src="https://musees.marseille.fr/sites/default/files/styles/banner_middle/public/2021-09/image5-1900x675.jpg?itok=BeKvtfRv">
                <h2>Musée d'Histoire de Marseille</h2>
                <p>Voie historique - 1e arrondissement</p>
            </section>

            <section class="section">
                <img src="https://musees.marseille.fr/sites/default/files/styles/banner_middle/public/2020-04/musees-1920x675.png?itok=koBlXF-l">
                <h2>Centre de la Vieille Charité</h2>
                <p>Vieille Charité -2e arrondissement</p>
            </section>
        </section>
        <section id="gallery">

            <section class="section">
                <img src="https://musees.marseille.fr/sites/default/files/styles/banner_middle/public/2020-03/musee_cantini-slider_1.jpg?itok=95c6tB2u">
                <h2>Musée Cantini</h2>
                <p>Art moderne - 6e arrondissement</p>
            </section>

            <section class="section">
                <img src="http://musees.marseille.fr/sites/default/files/styles/listing/public/2020-03/Vignette%20musee-mucem.jpg?itok=KYPLq_Cu">
                <h2>Mucem</h2>
                <p>Partenaire - 2e arrondissement</p>
            </section>

            <section class="section">
                <img src="https://musees.marseille.fr/sites/default/files/styles/banner_middle/public/2020-04/MUSEE%20HISTOIRE%20NATURELLE.jpg?itok=1ZC-zteS">
                <h2>Muséum d'histoire naturelle de Marseille</h2>
                <p>Palais Longchamp - 4e arrondissement</p>
            </section>
        </section>
    </main>

    <footer>
        <?php include "header/footer/footer.html" ?>
    </footer>
</body>

</html>