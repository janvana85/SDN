<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SDN Přihlášení</title>
</head>

<body id="login-body">
    <?php require_once('header.php')?>

    <form class="formular" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" id="jmeno" name="jmeno" placeholder="Uživatelské jméno" required><br>
            <input type="password" id="heslo" name="heslo" placeholder="Heslo" required><br>
            <div class="submit-buttons">
                <a href="register.php"><button class="btn" type="button">Registrovat</button></a>
                <button class="btn" type="submit">Přihlásit</button>
            </div>
    </form>
    
    <?php require_once('footer.php') ?>
  </body>
  </html>