<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SDN Přehled</title>
</head>
<body>
    <?php require_once('header.php')?>
    <section class="dashboard">

        <form class="nehoda" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset class="nehoda-fs">
            <div class="nehoda-info">
                <label for="datum">Datum:</label>
                <input type="date" id="datum" name="date" required><br>

            <label for="street">Ulice:</label>
            <input type="search" id="street" name="street" required><br>
            
            <label for="city">Město:</label>
            <input type="search" id="city" name="city" required><br>
            
            <label for="time_from">Od:</label>
            <input type="time" id="time_from" name="time_from" required><br>
            
            <label for="time_until">Do:</label>
            <input type="time" id="time_until" name="time_until" required><br>
            </div>
           
            <input type="checkbox" id="3prio" name="smrtelne" >
            <label for="3prio">Nehoda s následkem smrti</label><br>
            
            <input type="checkbox" id="2prio" name="stredni" >
            <label for="2prio">Nehoda s těžkým zraněním</label><br>
            
            <input type="checkbox" id="1prio" name="lehke" >
            <label for="1prio">Nehoda s lehkým zraněním</label><br>
            
            <button class="btn" type="submit">Přidat nehodu</button>
        </fieldset>
        </form>
    
    <div class="message_box">
        <div class="example_msg">
            <div class="crash_info">
                <img src="./images/icon.png" alt="car_crash_icon">
                <h2>Nehoda v ulici Nové mlýny v obci Praha</h2>
                <h3>Praha 1</h3>
            </div>
            <div class="time_info">
                <p class="datum">11.01.2023</p>
                <p class="time_span">18:30 - 20:35</p>
            </div>
            <span class="remove">&#10060</span>
        </div>
        

        <div class="example_msg">
            <div class="crash_info">
                <img src="./images/yellow_icon.png" alt="car_crash_icon">
                <h2>Nehoda v ulici Nové mlýny v obci Praha</h2>
                <h3>Praha 1</h3>
            </div>
            <div class="time_info">
                <p class="datum">11.01.2023</p>
                <p class="time_span">18:30 - 20:35</p>
            </div>
            <span class="remove">&#10060</span>
        </div>
        
        
        <div class="example_msg">
            <div class="crash_info">
                <img src="./images/red_icon.png" alt="car_crash_icon">
                <h2>Nehoda v ulici Nové mlýny v obci Praha</h2>
                <h3>Praha 1</h3>
            </div>
            <div class="time_info">
                <p class="datum">11.01.2023</p>
                <p class="time_span">18:30 - 20:35</p>
            </div>
            <span class="remove">&#10060</span>
            </div>
        </div>
    </section>
        <?php require_once('footer.php') ?>
    </body>
    </html>