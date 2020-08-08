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
                <h2>Species List Program update instructions</h2>
                <div class="slightspacer"></div>
                <div class="section">
                    <section class="accordion">
                        <h3 class="handle">program 'sl.jar' can be updated with the click of a button</h3>
                    </section>
                    <section class="accordion">
                        <h3 class="handle"><label class="inactive">WARNING: any unsaved/unfinished work will be lost!</label></h3>
                    </section>
                    <section class="accordion">
                        <h3 class="handle"><label class="active">click 'Update' button to start the updater program</label></h3>
                        <div class="accontent">
                            <section class="accordion">
                                <h4 class="handle"><label class="active">button displays if a newer version has been released</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">'Update Is Available' is displayed if there is a newer version available</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="active">'Update Program' is displayed if there isn't a newer version</label></h5>
                                        <div class="accontent">
                                            <section class="accordion">
                                                <h6 class="handle"><label class="inactive">can also be displayed if there is a communication problem with the server</label></h6>
                                            </section>
                                            <section class="accordion">
                                                <h6 class="handle"><label class="active">an 'update' to the same version just reinstalls the program</label></h6>
                                                <div class="accontent">
                                                    <section class="accordion"><p>may want to do this if the program becomes corrupted and isn't working as expected (except for update button)</p></section>
                                                    <section class="accordion"><p>settings will not be affected</p></section>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <section class="accordion">
                                <h4 class="handle"><label class="active">updater program has two functions</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">update the program</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">restore the backup from a previous update</label></h5>
                                    </section>
                                </div>
                            </section>
                            <section class="accordion">
                                <h4 class="handle"><label class="active">several prompts will be given for different reasons</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">oppertunity to backout or reconsider</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">to choose whether to update or to restore a backup</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="active">to choose backup option before updating - program can only manage one backup at a time</label></h5>
                                        <div class="accontent">
                                            <section class="accordion">
                                                <h6 class="handle"><label class="inactive">backup pre-update version, and overwrite previous backup (if any)</label></h6>
                                            </section>
                                            <section class="accordion">
                                                <h6 class="handle"><label class="inactive">update without making backup, and save the existing backup</label></h6>
                                            </section>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <section class="accordion">
                                <h5 class="handle"><label class="active">note: a restore is 'safer' than an update</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">a restore backs up the existing program, allowing a 'restore' to that backup (circular)</label></h6>
                                    </section>
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">an update introduces a new file, and a file is lost - depending on the chosen backup options</label></h6>
                                    </section>
                                </div>
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