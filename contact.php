<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <meta name="author"
        content="André Argiles Azoubel / Jhon Sebastian Reina Gomez / Lucas de Magalhaes e Castro / Natalia Selestrini Dias" />
    <meta name="description" content="Main Project: Selling Out!">
    <link rel="shortcut icon" href="./images/gummy-bear.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="green-bg">
    <div id="navbar">
        <?php
        include 'includes/global-nav.php';
        ?>
    </div>

    <section class="contact-section">
        <div class="contact-info">
            <h1>LET'S GET IN TOUCH!</h1>
            <p>Address: 123, Anywhere Dr, Canada</p><br>
            <p>Phone Number: (123) 456-7890</p><br>
            <p>E-mail: contact@alns.ca</p>
        </div>
        <div class="contact-form">
            <form>
                <input type="text" placeholder="Name (required)" required>
                <input type="text" placeholder="Telephone">
                <input type="email" placeholder="Email (required)" required>
                <input type="text" placeholder="Subject (required)" required>
                <textarea placeholder="Message (required)" required></textarea>
                <button type="submit">SEND</button>
            </form>
        </div>
    </section>

    <footer>
        <?php
        include 'includes/footer-navb.php';
        ?>
    </footer>
</body>

</html>