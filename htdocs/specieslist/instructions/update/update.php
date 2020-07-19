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
                <p><br/></p><p><br/></p><h2 class="notes">Species List Program update instructions</h2><p><br/></p>
                <ol class="notes">
                    <li class="notes">click on '<a href="/downloads/specieslist.zip">Species List Program (zip file)</a>' to download</li>
                    <li class="notes">make note of download location, if you missed the location it's probably in the 'downloads' folder</li>    
                    <li class="notes">move specieslist.zip to the folder where you want the program folder to be
                        <ul>
                            <li class="notes">can be anywhere</li>
                            <li class="notes">suggest moving to the user folder (like 'Richard') or documents folder</li>
                            <li class="notes">alternatively suggest moving to desktop</li>
                        </ul>
                    </li>
                    <li class="notes">extract zipped folder contents to its own folder, to avoid clutter (again 'can' be anywhere)
                        <ul>
                            <li class="notes">right-click on specieslist.zip and select "extract all"</li>
                            <li class="notes">'its own folder' means the program (sl.jar) should be contained in its own folder like '..\specieslist', not '..\Desktop'</li>
                            <li class="notes">the 'extract all' process should do this automatically</li>
                            <li class="notes">if you want to move the program later, the program (sl.jar) should not be moved by itself - instead move the folder</li>
                        </ul>
                    </li>
                    <li class="notes">make sure <a href="https://java.com/en/" target="_blank">Java version 8 (or later)</a> is installed on your computer</li>
                    <li class="notes">if needed, download a sample <a href="/downloads/sample.zip">masterlist file</a> for demonstration and/or testing
                        <ul>
                            <li class="notes">program needs a CSV masterlist file for initial load</li>
                            <li class="notes">for real world use, a more current list should be used</li>
                            <li class="notes">this 'samplemasterlist.csv' file is also zipped in a file called 'sample.zip', and might be in the 'downloads' folder</li>
                            <li class="notes">'sample.zip' can be in any folder (doesn't matter) - right-click and select "extract all"</li>
                            <li class="notes">'sample.zip' contains only 'samplemasterlist.csv' and doesn't matter where you extract it, but make note of where it is</li>
                        </ul>
                    </li>
                    <li class="notes">*** optional ***   make a shortcut link for convenient access
                        <ul>
                            <li class="notes">right-click on the 'sl.jar' file and select 'Send to >> Desktop (create shortcut)'
                                <ul>
                                    <li class="notes">this will make shortcut link on the desktop</li>
                                    <li class="notes">this shortcut can be moved and renamed</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="notes">*** if using the Excel macro ***  
                        <ul>
                            <li class="notes">after things have been moved around, make sure 'SLMacro.xlsm' is in the same folder as 'sl.jar'</li>
                            <li class="notes">as an Excel security feature, downloaded excel macros have one-time warning - yellow ribbon at top of window
                                <ul>
                                    <li class="notes">click on 'enable content' to clear yellow ribbon(s) permanently for that file</li>
                                    <li class="notes">close the file, Don't Save</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>
                <p><br/></p><div class="subscribe"></div>
            </div>
        </div>
        <div class="footer"><?php require '../../../include/footer.php'; ?>
        </div>
    </div>
</body>
</html>