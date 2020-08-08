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
                <h2>Species List Program initial masterlist file</h2>
                <div class="slightspacer"></div>
                <div class="section">
                    <section class="accordion">
                        <h3 class="handle"><label class="active">program needs a CSV masterlist file for initial load</label></h3>
                        <div class="accontent">
                            <section class="accordion"><h4>there are two basic options:</h4></section>
                            <section class="accordion">
                                <h4 class="handle"><label class="active">current masterlist file</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">the masterlist file you've been using, or a file from a government/education/forestry/scientific entity</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="active">must be formatted as a CSV (comma separated values) file</label></h5>
                                        <div class="accontent">
                                            <section class="accordion">
                                                <h6 class="handle"><label class="inactive">ideally, the columns are arranged with the unique fields first</label></h6>
                                            </section>
                                            <section class="accordion">
                                                <h6 class="handle"><label class="inactive">back this file up (make a copy) first, just in case</label></h6>
                                            </section>
                                            <section class="accordion">
                                                <h6 class="handle"><label class="active">change file to CSV format</label></h6>
                                                <div class="accontent">
                                                    <section class="accordion"><p>open the file in Excel (or your favorite spreadsheet software), go to the file menu and select 'Save As'</p></section>
                                                    <section class="accordion"><p>choose a location, and make note of the location for the <a href="../firstrun">first use</a></p></section>
                                                    <section class="accordion"><p>select CSV as the 'file type', name it, and save it</p></section>
                                                    <section class="accordion"><p>a prompt may pop up reminding that CSV can only have one (1) worksheet, select the correct sheet and continue</p></section>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <section class="accordion">
                                <h4 class="handle"><label class="active">a sample masterlist file for demonstration and/or testing</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">for real world use, a more current list should be used</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">download sample <a href="/download/sample.zip">here</a></label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="active">the 'samplemasterlist.csv' file is zipped in a file called 'sample.zip'</label></h5>
                                        <div class="accontent">
                                            <section class="accordion"><p>on downloading, sample.zip might automatically be put in the 'downloads' folder</p></section>
                                            <section class="accordion"><p>sample.zip contains only 'samplemasterlist.csv'</p></section>
                                            <section class="accordion"><p>sample.zip can be moved to any folder, or not</p></section>
                                            <section class="accordion"><p>right-click on sample.zip and select "Extract All..."</p></section>
                                            <section class="accordion"><p>does not matter where file is extracted to, but make note of the location for the <a href="../firstrun">first use</a></p></section>
                                        </div>
                                    </section>
                                </div>
                            </section>
                        </div>
                    </section>
                    <section class="accordion">
                        <h3 class="handle"><label class="active">masterlist CSV is normally used once</label></h3>
                        <div class="accontent">
                            <section class="accordion">
                                <h4 class="handle">"abnormal" circumstances include:</h4>
                            </section>
                            <section class="accordion">
                                <h4 class="handle"><label class="active">certain situations that require a reload</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">a re-install will require reload (or moving old program CSSL file into new install directory)</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">the program CSSL file is disturbed or not kept with program</label></h5>
                                    </section>
                                </div>
                            </section>
                            <section class="accordion">
                                <h4 class="handle"><label class="active">user choice to load or reload a masterlist CSV file</label></h4>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">some entry settings could be lost</label></h5>
                                    </section>
                                    <section class="accordion">
                                        <h5 class="handle"><label class="inactive">will have to repeat some of the <a href="../firstrun">first time use</a> steps</label></h5>
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