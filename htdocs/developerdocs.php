<?php include "includes/head.php"; ?>

<h1>Arden2ByteCode Developer Documentation</h1>

<p>This file is a collection of the various 
README.md <a href="http://en.wikipedia.org/wiki/Markdown">Markdown</a> 
files contained in the
Arden2ByteCode GitHub repositories</p>

<?php
    $devdocs = "includes/developerdocs.html";
    if (is_file($devdocs)) {
	    include($devdocs);
	}
?>

<?php include "includes/foot.php"; ?>
