<?php include "includes/head.php"; ?>

<h2>Arden2ByteCode Downloads</h2>

<h3>Binary Packages</h3>

<p>The most recent binary packages can be found at the GitHub project
<a href="https://github.com/hflicka/arden2bytecode/archives/master">downloads listing</a>
</p>

<p>Here is a mirror of that listing:</p>

<ul id="downloads"><li style="list-style-type: none;">Loading (requires JavaScript)...</li></ul>

<script type="text/javascript">
$(function() {
	$('#downloads').empty();
    $.ajax({
		url: 'https://api.github.com/repos/hflicka/arden2bytecode/downloads',
		dataType: 'jsonp'
	}).done(function(result) {
		$.each(result.data, function(index, value) {
			$('#downloads').append(
				'<li><a href="' + value.html_url
				+ '">' + value.name 
				+ '</a> - ' + value.description + '</li>');
		});
	});
});
</script>

<h3>Source Packages</h3>

<p>The most recent source package is in the master branch of the Git repository.
You can download it from GitHub as <a href="https://github.com/hflicka/arden2bytecode/tarball/master">.tar.gz</a>
or <a href="https://github.com/hflicka/arden2bytecode/zipball/master">.zip</a>.<br>
To build, follow the 
<a href="http://arden2bytecode.sourceforge.net/docs/compiling-arden2bytecode-from-source">
instructions</a> in the documentation wiki. It's basically typing <code>ant</code> at the command prompt.</p>

<?php include "includes/foot.php"; ?>
