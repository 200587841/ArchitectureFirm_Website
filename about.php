<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <meta name="author"
        content="André Argiles Azoubel / Jhon Sebastian Reina Gomez / Lucas de Magalhaes e Castro / Natalia Selestrini Dias" />
    <meta name="description" content="Main Project: Selling Out!">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header>
    <div id="navbar">
        <?php
        include 'includes/global-nav.php';
        ?>
    </div>
    </header>

    <section class="about-us-section">
        <div class="top-box">
            <div class="column">
                <div class="title-about">
                <h1>ABOUT US</h1>
                </div>
            </div>
            <div class="column">
                <h1>&nbsp;</h1> <!-- Empty h1 to align text vertically -->
                <p>
                    Our signature color green symbolizes our commitment to sustainable development. At Alns, great architecture is sustainable architecture. Join us in building a greener world, one project at a time.
                    Welcome to Alns, where innovation meets sustainability. We create architectural marvels that harmonize with the environment, with sustainability at the heart of everything we do.             
                </p>
            </div>
            <div class="column">
                <h1>&nbsp;</h1> <!-- Empty h1 to align text vertically -->
                <p>
                Alns combines cutting-edge technology with eco-friendly practices, minimizing ecological footprints and maximizing energy efficiency. Our projects span residential, commercial, and industrial sectors, providing innovative solutions that meet the highest standards of quality and sustainability. Join us on a journey to a better, greener future.
                </p>
            </div>
        </div>
        <div class="bottom-box">
            <div class="column">
                <img src="./images/about1.jpg" alt="Architects working" class="about-us-image">
            </div>
            <div class="column">
                <img src="./images/about2.jpg" alt="Team planning" class="about-us-image">
            </div>
            <div class="column">
                <img src="./images/about3.jpg" alt="Design process" class="about-us-image">
            </div>
        </div>
    </section>

    <footer>
    <?php
    include 'includes/footer-navg.php';
    ?>
</footer>
</body>

</html>
