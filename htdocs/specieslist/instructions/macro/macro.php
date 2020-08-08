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
                <h2>Species List Program Excel macro</h2>
                <div class="slightspacer"></div>
                <div class="section">
                    <section class="accordion">
                        <h4 class="handle"><label class="inactive">optional compontent that formats the finished list as an Excel workbook</label></h4>
                    </section>
                    <section class="accordion">
                        <h4 class="handle"><label class="inactive">requires Excel 2010 (part of Microsoft Office 2010) or later</label></h4>
                    </section>
                    <section class="accordion">
                        <h4 class="handle"><label class="active">setup the macro before using</label></h4>
                        <div class="accontent">
                            <section class="accordion">
                                <h5 class="handle"><label class="inactive">if things have been moved, make sure 'SLMacro.xlsm' is in the same folder as 'sl.jar'</label></h5>
                            </section>
                            <section class="accordion">
                                <h5 class="handle"><label class="active">as an Excel security feature, downloaded excel macros have one-time warning</label></h5>
                                <div class="accontent">
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">open the file by double clicking on it (normally this file isn't opened manually)</label></h6>
                                    </section>
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">click on 'enable content' in the yellow ribbon(s) to clear warning for that file</label></h6>
                                    </section>
                                    <section class="accordion">
                                        <h6 class="handle"><label class="inactive">close the file, Don't Save</label></h6>
                                    </section>
                                </div>
                            </section>
                        </div>
                    </section>
                    <section class="accordion">
                        <h5 class="handle"><label class="active">note: save macro seperately</label></h5>
                        <div class="accontent">
                            <section class="accordion">
                                <h6 class="handle"><label class="inactive">for saving file (header info), save before pressing button</label></h6>
                            </section>
                            <section class="accordion">
                                <h6 class="handle"><label class="inactive">clicking button will close the file without saving</label></h6>
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