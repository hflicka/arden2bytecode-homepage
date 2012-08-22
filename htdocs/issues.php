<?php include "includes/head.php"; ?>

<h2>Bug reports</h2>

<p>If you find a bug in Arden2ByteCode, please post it at 
<a href="https://github.com/hflicka/arden2bytecode/issues/new"
>https://github.com/hflicka/arden2bytecode/issues/new</a>.</p>

<p>Issues of Arden2ByteCode at GitHub are:</p>

<ul id="issues"><li style="list-style-type: none;">Loading (requires JavaScript)...</li></ul>

<script type="text/javascript">
$('head').append($('<script />', {
  src: 'github-flavored-markdown.js',
  type: 'text/javascript'
}));
</script>
<script type="text/javascript">
$(function() {
    var converter = new Showdown.converter();
    $.ajax({
		url: 'https://api.github.com/repos/hflicka/arden2bytecode/issues',
		dataType: 'jsonp'
	}).done(function(result) {
		$('#issues').empty();
		$.each(result.data, function(index, issue) {
			$('#issues').append(
				'<li><span class="issuetitle"><a href="' + issue.html_url
				+ '">' + issue.title 
				+ '</a> (' + issue.state + ') '
				+ '<span class="issueowner"> - posted by: <a href="' + issue.user.url + '">' 
				+ issue.user.login + '</a></span></span>' 
				+ '<div class="issuebody">' + converter.makeHtml(issue.body) + '</div></li>');
		});
	});
});
</script>

<?php include "includes/foot.php"; ?>
