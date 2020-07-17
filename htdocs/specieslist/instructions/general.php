<?php require '../../include/standardscript.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><?php require '../../include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; <a href="/">Home</a> &gt;&gt; <a href="/specieslist">Species List</a> &gt;&gt; <a href="/specieslist/instructions">Instructions</a> &gt;&gt; </div>
        <div id="socialmedialinks"><?php require '../../include/navigation.php'; ?>
        </div>
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <div class="content">
                <p><br/></p><p><br/></p><h2 class="notes">Species List Program general use instructions</h2><p><br/></p>
                <p class="notes">To run, click on 'sl.jar' OR on the shortcut link (if you made one)</p>
                <p class="notes">Program takes a minute to load. Be careful not to open it twice, as two will make your Java sludgy.</p>
                <p><br/></p>
                <p class="notes">two buttons to make list:</p>
                <ul>
                    <li class="notes">'Export List to Excel'
                        <ul>
                            <li class="notes">exports to .xlsx file</li>
                            <li class="notes">must have Excel 2010 or later, that plays macros</li>
                        </ul>
                    </li>
                    <li class="notes">'Export List to CSV'
                        <ul>
                            <li class="notes">if you don't have macro playing version of Excel</li>
                            <li class="notes">to save a list that can be loaded later</li>
                        </ul>
                    </li>
                </ul>
                <p class="notes">warnings of files not existing are supposed to happen on first run(s)</p>
                <p class="notes">If they appear after program has been used several times, it may be because some files were moved</p>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require '../../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>