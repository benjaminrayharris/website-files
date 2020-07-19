<?php require '../../include/standardscript.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><?php require '../../include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; <a href="/">Home</a> &gt;&gt; <a href="/specieslist">Species List</a> &gt;&gt; </div>
        <div id="socialmedialinks"><?php require '../../include/navigation.php'; ?>
        </div>
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <div class="content">
                <p><br/></p><p><br/></p><h2 class="notes">Species List Program instructions...</h2>
                <p class="info-text">Your IP address '<?php echo $ip; ?>' is assigned to the <?php echo $api_result['city']; ?> area</p>
                <p class="notes">On visiting this page, your computer sent this identification string:<br/>'<?php echo("".$_SERVER['HTTP_USER_AGENT'].""); ?>'<br/> from which we think you are using <?php echo $device_details; ?></p><p><br/></p>
                <p class="notes"><a href="/specieslist/instructions/dandi">Download and Install</a></p>
                <p class="notes"><a href="/specieslist/instructions/masterlist">Initial Masterlist File</a></p>
                <p class="notes"><a href="/specieslist/instructions/shortcut">Make a Shortcut Link</a></p>
                <p class="notes"><a href="/specieslist/instructions/macro">Using the Excel Macro</a></p>
                <p class="notes"><a href="/specieslist/instructions/firstrun">First Time Use</a></p>
                <p class="notes"><a href="/specieslist/instructions/general">General Use</a></p>
                <p class="notes"><a href="/specieslist/instructions/update">Update Program</a></p>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require '../../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>