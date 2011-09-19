<?php include "includes/head.php"; ?>

<h2>Contact the arden2bytecode Team</h2>

<p>You may contact me via: 
<ul>
<li>GitHub: <a href="http://github.com/hflicka">http://github.com/hflicka</a></li>
<li>E-Mail: <a class="mail" href="c.agdxfv@op-wn.yz"></a></li>
</ul>
</p>

<script type="text/javascript">
$(function() {
	$('a.mail').each(function(index, element) {
		var addr = $(element).attr('href');
		addr = addr.replace(/[a-zA-Z]/g, function(c) {
			return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 5)? c : c - 26);
		});
		$(element).attr('href', 'mailto:' + addr);
		$(element).text(addr);
	});
});
</script>

<?php include "includes/foot.php"; ?>
