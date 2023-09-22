<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SDN Registrace</title>
</head>

<body id="login-body">
    <?php require_once('header.php')?>

    <form class="formular" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" id="jmeno" name="jmeno" placeholder="Uživatelské jméno" required><br>
            <input type="password" id="heslo" name="heslo" placeholder="Heslo" required><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="tel" id="phone" name="phone" placeholder="Telefon (123-456-789)" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"><br>
            <div class="submit-buttons">
                <button class="btn" type="submit">Registrovat</button>
            </div>
    </form>
    
    <?php require_once('footer.php') ?>
  </body>
  </html>