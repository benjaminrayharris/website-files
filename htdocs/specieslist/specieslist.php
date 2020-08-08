<!DOCTYPE html>
<html lang="en">
<head><?php require '../include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; <a href="/">Home</a> &gt;&gt; </div>
        <?php require '../include/header.php'; ?>
        <div class="container">
            <div class="content">
                <h1 class="logo">Species List Project</h1>
                <h3 class="info-text"><a href="/download/specieslist.zip">Species List Program (zip file)</a></h3>
                <h5>*needs <a href="https://java.com/en/" target="_blank">Java version 8 (or later)</a> to be installed</h5>
                <h5>download a sample <a href="/download/sample.zip">masterlist file (zipped)</a></h5>
                <h5>see <a href="/specieslist/instructions">instruction page</a> for more details</h5>
                <h5><a href="https://github.com/benjaminrayharris/SpeciesList" target="_blank">Github page</a> has version <?php require 'version/version.php'; ?></h5>
                <div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require '../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>