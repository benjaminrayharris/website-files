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
                <p><br/></p><p><br/></p><h2 class="notes">Shortcut Links</h2><p><br/></p>
                <p class="notes">"A shortcut link isn't necessary, so why make one?"</p>
                <p><br/></p>
                <p class="notes">The program creates several files in its folder, that all need to be kept with the program and left undisturbed</p>
                <ul>
                    <li class="notes">it's recommended to not have the actual program file 'sl.jar' directly on the desktop, because of the desktop folder's unique traits
                        <ul>
                            <li class="notes">has finite space</li>
                            <li class="notes">gets cluttered easily, and files/folders are frequently 'cleaned'</li>
                            <li class="notes">always on display, and things can be accidentally disturbed</li>
                        </ul>
                    </li>
                    <li class="notes">allows for easy access to the program, while the program directory (folder) can be in a better location
                        <ul>
                            <li class="notes">the program directory can live in a directory that is generally undisturbed</li>
                            <li class="notes">a shortcut reduces the chance of modifying the settings files created by the program</li>
                            <li class="notes">a shortcut can simplify 'finding' the program</li>
                        </ul>
                    </li>
                </ul>
                <p><br/></p>
                <p class="notes">Instructions for Windows users (Mac users will need to translate... sorry)</p>
                <ul>
                    <li class="notes">right-click on the 'sl.jar' file and select 'Send to >> Desktop (create shortcut)'
                        <ul>
                            <li class="notes">this will make shortcut link on the desktop</li>
                            <li class="notes">this shortcut can be moved and renamed</li>
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