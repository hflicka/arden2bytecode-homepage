<?php 
include "includes/head.php";
include_once "includes/docs.php"; 
?>

<h2>Arden2ByteCode Downloads</h2>

<h3>Binary Packages</h3>

<p>The most recent binary packages can be found at the GitHub project
<a href="https://github.com/<?php echo $GIT_REPO_OWNER; ?>/arden2bytecode/archives/master">downloads listing</a>
</p>

<p>Here is a mirror of that listing:</p>

<ul id="downloads"><li style="list-style-type: none;">Loading (requires JavaScript)...</li></ul>

<script type="text/javascript">//<![CDATA[
$(function() {
    $.ajax({
		url: 'https://api.github.com/repos/<?php echo $GIT_REPO_OWNER; ?>/arden2bytecode/downloads',
		dataType: 'jsonp'
	}).done(function(result) {
		$('#downloads').empty();
		$.each(result.data, function(index, value) {
			$('#downloads').append(
				'<li><a href="' + value.html_url
				+ '">' + value.name 
				+ '</a> - ' + value.description + '</li>');
		});
	});
});
//]]>
</script>

<div id="changelog">
<?php 
	echo render_file('Changelog', '<h2><a href="/docs/changelog">$title</a></h2>');
?>
</div>

<h3>Source Packages</h3>

<p>The most recent source package is in the master branch of the 
<a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode">Git repository</a>.<br>Clone with:</p>
<pre><code>$ git clone <?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode.git
</code></pre>
<p>You can download it from GitHub as <a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode/tarball/master">.tar.gz</a>
or <a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode/zipball/master">.zip</a>.<br>
To build, follow the 
<a href="http://arden2bytecode.sourceforge.net/docs/compiling-arden2bytecode-from-source">
instructions</a> in the documentation wiki. It's basically typing <code>ant</code> at the command prompt.</p>

<?php include "includes/foot.php"; ?>
