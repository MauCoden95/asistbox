<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url ?>Assets/StylesHome.css">
        <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>
        <title>AsistBox</title>
    </head>
    <body>
        <header id="header">
            <h1>Bienvenido <?php print_r($_SESSION['identity']->username); ?></h1>
        </header>

        <section class="home-section">
            <div id="navbar">
                <img src="<?= base_url ?>Assets/Img/Logo.png" alt="">
                <a href="<?= base_url ?>Admin/login">Cerrar Sesión</a>
            </div>
        </section>
    </body>
</html>

