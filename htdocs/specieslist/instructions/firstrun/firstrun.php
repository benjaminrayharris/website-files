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
                <h2>Species List Program first time use instructions</h2>
                <div class="slightspacer"></div>
                <div class="section">
                    <section class="accordion">
                        <h5 class="handle"><label class="inactive">to run, click on 'sl.jar' OR 'slauncher.jar' OR the shortcut link (if you made one)</label></h5>
                    </section>
                    <section class="accordion">
                        <h5 class="handle"><label class="inactive">program takes a minute to load -- be careful not to open it twice, as two will make your Java sludgy</label></h5>
                    </section>
                    <section class="accordion">
                        <h5 class="handle"><label class="inactive">first run will ask what masterlist file should be loaded initially -- must be a CSV formatted file</label></h5>
                    </section>
                    <section class="accordion">
                        <h5 class="handle"><label class="active">on loading the masterlist for the first time, a popup will appear for every questionable list entry</label></h5>
                        <div class="accontent">
                            <section class="accordion"><h6>as entries are loaded, user may be prompted to approve addition of entry with 'duplicate' fields</h6></section>
                            <section class="accordion">
                                <h6 class="handle"><label class="inactive">if no 'unique' fields are matched, entry is added with no prompt</label></h6>
                            </section>
                            <section class="accordion">
                                <h6 class="handle"><label class="inactive">if all 'sortable' fields (which includes 'unique' fields) are matched, entry is rejected with no prompt</label></h6>
                            </section>
                            <section class="accordion">
                                <h6 class="handle"><label class="inactive">if any of the 'unique' fields match, but not all the 'sortable' fields match, user is prompted for approval</label></h6>
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