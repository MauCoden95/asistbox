<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ?>Assets/Styles.css">
    <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>
    <title>AsistBox</title>
</head>
<body>
    <section id="login">
        <div>
            <img src="<?= base_url ?>Assets/Img/Logo.png" alt="Logo">

            <form action="<?= base_url ?>Admin/loginAdmin" method="post" autocomplete="off">
                <?php if(isset($_SESSION['error_login'])) : ?>
                    <strong>Error, usuario y/o contraseña incorrectos</strong>
                <?php endif; ?>

                <div class="form_div">
                    <input type="text" name="username" placeholder="Usuario" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form_div">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class="fas fa-key"></i>
                </div>
                <input type="submit" value="Ingresar">
            </form>

            <a href="<?= base_url ?>">Ingreso usuario</a>
        </div>
    </section>
</body>
</html>