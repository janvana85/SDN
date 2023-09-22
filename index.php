<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>SDN</title>
        <!-- Leaflet link -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <script defer src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script defer src="index.js"></script>
    </head>
    <body>
    <?php require_once('header.php')?>
    <main class="content">
        <div id="map"></div>
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
            </div>

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
            </div>
            
        </div>
</main>
    <?php require_once('footer.php')?>
</body>
</html>