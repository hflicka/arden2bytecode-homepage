<?php include "includes/head.php"; ?>

<div id="devdocs">

<h1>Arden2ByteCode Developer Documentation</h1>

<p>This file is a collection of the various 
README.md <a href="http://en.wikipedia.org/wiki/Markdown">Markdown</a> 
files contained in the
Arden2ByteCode GitHub repositories</p>

<div id="includes">
<?php
    $devdocs = "includes/developerdocs.html";
    if (is_file($devdocs)) {
	    include($devdocs);
	} else {
	    echo "<p>No developer documentation found. Generate with <code>makedocs</code> script.</p>";
	}
?>
</div>
</div>

<?php include "includes/foot.php"; ?>
