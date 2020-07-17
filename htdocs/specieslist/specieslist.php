<?php require '../include/standardscript.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><?php require '../include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; <a href="/">Home</a> &gt;&gt; </div>
        <div id="socialmedialinks"><?php require '../include/navigation.php'; ?>
        </div>
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <div class="content">
                <h1 class="logo">Species List Project</h1>
                <p class="info-text">Your IP address '<?php echo $ip; ?>' is assigned to the <?php echo $api_result['city']; ?> area</p>
                <p class="info-text">On visiting this page, your computer sent this identification string:<br/>'<?php echo("".$_SERVER['HTTP_USER_AGENT'].""); ?>'<br/> from which we think you are using <?php echo $device_details; ?></p>
                <h2 class="info-text"><a href="/downloads/specieslist.zip">Species List Program (zip file)</a></h2>
                <p class="info-text">*needs <a href="https://java.com/en/" target="_blank">Java version 8 (or later)</a> to be installed</p>
                <p class="info-text">download a sample <a href="/downloads/sample.zip">masterlist file (zipped)</a></p>
                <p class="info-text">see <a href="/specieslist/instructions">instruction page</a> for more details</p>
                <p class="info-text"><a href="https://github.com/benjaminrayharris/SpeciesList" target="_blank">Github page</a></p>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require '../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>