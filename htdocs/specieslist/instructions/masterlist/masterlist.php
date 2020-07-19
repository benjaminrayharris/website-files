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
                <p><br/></p><p><br/></p><h2 class="notes">Species List Program initial masterlist file</h2><p><br/></p>
                <p class="notes">Program needs a CSV masterlist file for initial load</p>
                <p class="notes">There are two basic options:</p>
                <ul class="notes">
                    <li class="notes"></li>
                    <li class="notes">current masterlist file
                        <ul>
                            <li class="notes">the masterlist file you've been using, or a file from a government/education/forestry/scientific entity</li>
                            <li class="notes">must be formatted as a CSV (comma separated values) file
                                <ol>
                                    <li class="notes">back this file up (make a copy) first, just in case</li>
                                    <li class="notes">if file is not a '.csv' file, open the file in Excel (or your favorite spreadsheet software)</li>
                                    <li class="notes">select 'Save As', select CSV as the 'file type', name it, and save it</li>
                                    <li class="notes">a prompt may pop up reminding that CSV can only have one (1) worksheet, select the correct sheet and continue</li>
                                </ol>
                            </li>
                            <li class="notes">'its own folder' means the program (sl.jar) should be contained in its own folder like '..\specieslist', not '..\Desktop'</li>
                            <li class="notes">if you want to move the program later, the program (sl.jar) should not be moved by itself - instead move the folder</li>
                        </ul>
                    </li>    
                    <li class="notes"></li>
                    <li class="notes">download a <a href="/downloads/sample.zip">sample masterlist file</a> for demonstration and/or testing
                        <ul>
                            <li class="notes"></li>
                            <li class="notes">for real world use, a more current list should be used</li>
                            <li class="notes">this 'samplemasterlist.csv' file is also zipped in a file called 'sample.zip', and might be in the 'downloads' folder</li>
                            <li class="notes">'sample.zip' can be in any folder (doesn't matter) - right-click and select "extract all"</li>
                            <li class="notes">'sample.zip' contains only 'samplemasterlist.csv' and doesn't matter where you extract it, but make note of where it is</li>
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