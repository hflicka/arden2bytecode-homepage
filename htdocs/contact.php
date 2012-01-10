<?php include "includes/head.php"; ?>

<h2>Contact the Arden2ByteCode Team</h2>

<p><img src="https://www.tu-braunschweig.de/icons/tubsdesign/siegel_rot.jpg" alt="TU Braunschweig Logo" style="display: block; margin: 4px;" />
Arden2ByteCode was created at the <a href="http://www.tu-braunschweig.de">Technische Universit&auml;t Braunschweig</a> in
cooperation between the 
<a href="http://www.plri.de/Arden2ByteCode.html">Peter L. Reichertz Institute for Medical Informatics</a>
and the 
<a href="http://www.ips.cs.tu-bs.de/">Institute for Programming and Reactive Systems</a>.</p>
<p>Please refer to the following list (in alphabetical order).<br>
You may contact any of the projects contributors via their respective profile pages. :
</p>
<ul>
<li><a href="http://github.com/hflicka">Hannes Flicka</a> (E-Mail: <a class="mail" href="c.agdxfv@op-wn.yz"></a>)</li>
<li><a href="http://www.plri.de/index.php?id=gietzelt">Matthias Gietzelt</a></li>
<li><a href="https://www.tu-braunschweig.de/ips/staff/goltz">Prof. Dr. Ursula Goltz</a></li>
<li><a href="https://github.com/dgrunwald">Daniel Grunwald</a></li>
<li><a href="http://www.plri.de/mitarbeiter/haux.html">Prof. Dr. Reinhold Haux</a></li>
<li><a href="https://www.tu-braunschweig.de/ips/staff/lochau">Malte Lochau</a></li>
<li><a href="http://www.plri.de/index.php?id=marschollek">Prof. Dr. Dr. Michael Marschollek</a></li>
<li><a href="http://www.plri.de/index.php?id=song">Bianying Song</a></li>
<li><a href="http://www.plri.de/mitarbeiter/wolf.html">Dr. Klaus-Hendrik Wolf</a></li>
</ul>

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
