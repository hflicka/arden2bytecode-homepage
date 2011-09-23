<?php include "includes/head.php"; ?>

<h2>Contact the Arden2ByteCode Team</h2>

<p>As said on the <a href="/">about</a> page, Arden2ByteCode was created in
cooperation between the 
<a href="http://www.plri.de/index.php?id=Arden2ByteCode">Peter L. Reichertz Institute</a>
for medical computer science and the 
<a href="http://www.ips.cs.tu-bs.de/">Institute for Programming and Reactive Systems</a>.
<br>
Therefore, you may contact any of the projects contributors via their respective profile pages. Refer to the following list:
</p>
<ul>
<li><a href="http://www.plri.de/index.php?id=wolf">Dr.-Ing. Klaus-Hendrik Wolf</a></li>
<li><a href="https://www.tu-braunschweig.de/ips/staff/goltz">Prof. Dr. Ursula Goltz</a></li>
<li><a href="https://www.tu-braunschweig.de/ips/staff/lochau">Malte Lochau</a></li>
<li><a href="https://github.com/dgrunwald">Daniel Grunwald</a></li>
<li><a href="http://www.plri.de/index.php?id=marschollek">Prof. Dr. med. Dr.-Ing. Michael Marschollek</a></li>
<li><a href="http://www.plri.de/index.php?id=gietzelt">Matthias Gietzelt</a></li>
<li><a href="http://www.plri.de/index.php?id=song">Bianying Song</a></li>
</ul>

<p>You may contact the author of this web site (Hannes Flicka) via:</p>
<ul>
<li>GitHub: <a href="http://github.com/hflicka">http://github.com/hflicka</a></li>
<li>E-Mail: <a class="mail" href="c.agdxfv@op-wn.yz"></a></li>
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
