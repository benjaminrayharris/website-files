<?php require 'include/standardscript.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><?php require 'include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; </div>
        <div id="socialmedialinks"><?php require 'include/navigation.php'; ?>
        </div>
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <div class="content">
                <h1 class="logo">Welcome to Ben's site!</h1>
                <p class="info-text">Your IP address '<?php echo $ip; ?>' is assigned to the <?php echo $api_result['city']; ?> area</p>
                <p class="info-text">On visiting this page, your computer sent this identification string:<br/>'<?php echo("".$_SERVER['HTTP_USER_AGENT'].""); ?>'<br/> from which we think you are using <?php echo $device_details; ?></p>
                <h2 class="info-text">Projects</h2>
                <p class="info-text"><a href="/specieslist">Species List Program</a></p>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require 'include/footer.php'; ?>
        </div>
    </div>
</body>
</html>