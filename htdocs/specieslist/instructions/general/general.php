<!DOCTYPE html>
<html lang="en">
<head><?php require '../../../include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; <a href="/">Home</a> &gt;&gt; <a href="/specieslist">Species List</a> &gt;&gt; <a href="/specieslist/instructions">Instructions</a> &gt;&gt; </div>
        <?php require '../../../include/header.php'; ?>
        <div class="container">
            <div class="content">
                <h2>Species List Program general use instructions</h2>
                <div class="slightspacer"></div>
                <div class="section">
                    <section class="accordion">
                        <h4 class="handle"><label class="inactive">to run, click on 'sl.jar' OR 'slauncher.jar' OR the shortcut link (if you made one)</label></h4>
                    </section>
                    <section class="accordion">
                        <h4 class="handle"><label class="inactive">program takes a minute to load -- be careful not to open it twice, as two will make your Java sludgy</label></h4>
                    </section>
                    <section class="accordion">
                        <h4 class="handle"><label class="active">there are two options for making a list</label></h4>
                        <div class="accontent">
                            <section class="accordion">
                                <h5 class="handle"><label class="active">Export List to Excel</label></h5>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">exports to .xlsx file</label></h6>
                                    </section>
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">must have Excel 2010 or later, that plays macros</label></h6>
                                    </section>
                                </div>
                            </section>
                            <section class="accordion">
                                <h5 class="handle"><label class="active">Export List to CSV</label></h5>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">if you don't have macro playing version of Excel</label></h6>
                                    </section>
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">to save a list that can be loaded later</label></h6>
                                    </section>
                                </div>
                            </section>
                        </div>
                    </section>
                    <section class="accordion">
                        <h4 class="handle"><label class="active">warnings may pop up of "files not existing" </label></h4>
                        <div class="accontent">
                            <section class="accordion">
                                <h5 class="handle"><label class="inactive">these are supposed to happen on the first run(s)</label></h5>
                            </section>
                            <section class="accordion">
                                <h5 class="handle"><label class="inactive">if they appear after program has been used several times, it may be because some files were moved</label></h5>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
            <p><br/></p><div class="subscribe"></div>
        </div>
        <div class="footer"><?php require '../../../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>