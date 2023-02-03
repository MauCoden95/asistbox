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
    <section id="entry">
        <div>
            <img src="<?= base_url ?>Assets/Img/Logo.png" alt="Logo">

            <form action="" method="post" autocomplete="off">
                <div class="form_div">
                    <input type="number" name="code" placeholder="Codigo de empleado">
                    <i class="fas fa-briefcase"></i>
                </div>
                
                <input type="submit" value="Registrar">
            </form>

            <a href="<?= base_url ?>Admin/login">Login Administrador</a>
        </div>
    </section>
</body>
</html>