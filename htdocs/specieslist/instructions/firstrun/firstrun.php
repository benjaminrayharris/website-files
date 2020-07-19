<?php require '../../../include/standardscript.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><?php require '../../../include/head.php'; ?>
</head>
<body>
    <div class="main">
        <div id="path">&gt;&gt; <a href="/">Home</a> &gt;&gt; <a href="/specieslist">Species List</a> &gt;&gt; <a href="/specieslist/instructions">Instructions</a> &gt;&gt; </div>
        <div id="socialmedialinks"><?php require '../../../include/navigation.php'; ?>
        </div>
        <div class="cover black" data-color="black"></div>
        <div class="container">
            <div class="content">
                <p><br/></p><p><br/></p><h2 class="notes">Species List Program first time use instructions</h2><p><br/></p>
                <p class="notes">To run, click on 'sl.jar' OR on the shortcut link (if you made one)</p>
                <p class="notes">Program takes a minute to load. Be careful not to open it twice, as two will make your Java sludgy.</p>
                <p><br/></p>
                <p class="notes">First run will ask what masterlist file should be loaded initially. Must be a CSV formatted file.</p>
                <p><br/></p>
                <p class="notes">On loading the masterlist for the first time, a popup will appear for every questionable list entry</p>
                <p class="notes"></p>
                <ul>
                    <li class="notes">As entries are loaded, user may be prompted to approve addition of entry with 'duplicate' fields 
                        <ul>
                            <li class="notes">if no 'unique' fields are matched, entry is added with no prompt</li>
                            <li class="notes">if all 'sortable' fields (which includes 'unique' fields) are matched, entry is rejected with no prompt</li>
                            <li class="notes">if any of the 'unique' fields match, but not all the 'sortable' fields match, user is prompted for approval</li>
                        </ul>
                    </li>
                </ul>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require '../../../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>