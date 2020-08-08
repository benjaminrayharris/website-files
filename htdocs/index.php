<?php require 'include/identificationscript.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><?php require 'include/head.php'; ?>
    <meta name="keywords" content="Ben ben Benjamin benjamin Benny benny Harris harris Harrison harrison Ray ray">
    <script src="/sitefiles/hanoi.js" type="text/javascript"></script>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; </div>
        <?php require 'include/header.php'; ?>
        <div id="deviceinfo">
            <p><?php echo $device_details; ?></p>
            <p><?php echo $ip; ?></p>
            <p><?php echo $api_result['city']; ?></p>
        </div>
        <div id="mapcontainer">
            <div id="map">
                <script>
                    function initMap() {
                        var home = {lat: <?php echo $api_result['latitude']; ?>, lng: <?php echo $api_result['longitude']; ?>};
                        var map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 10,
                            center: home
                        });
                    }
                </script>
            </div>
        </div>
        <div id="hanoi"></div>
        <div id="hanoicontrol"></div>
        <div class="container">
            <div class="content">
                <h1>Welcome to Ben's site!</h1>
                <h3>Projects</h3>
                <h5><a href="/specieslist">Species List Program</a></h5>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require 'include/footer.php'; ?>
        </div>
    </div>
    <div id="bottom-edge"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></div>
</body>
</html>