<?php include "includes/head.php"; ?>

<h2>Bug reports</h2>

<p>If you find a bug in Arden2ByteCode, please post it at 
<a href="https://github.com/hflicka/arden2bytecode/issues/new"
>https://github.com/hflicka/arden2bytecode/issues/new</a>.</p>

<h3>Issues of <a href="https://github.com/hflicka/arden2bytecode">Arden2ByteCode</a> at GitHub</h3>

<ul id="arden2bytecode" class="issues"><li style="list-style-type: none;">Loading (requires JavaScript)...</li></ul>

<h3>Issues of the <a href="https://github.com/hflicka/ardensyntax-eclipse-plugin">Arden Syntax Eclipse plugin</a> at GitHub</h3>

<ul id="eclipseplugin" class="issues"><li style="list-style-type: none;">Loading (requires JavaScript)...</li></ul>

<script type="text/javascript">//<![CDATA[
$('head').append($('<script />', {
  src: 'github-flavored-markdown.js',
  type: 'text/javascript'
}));
//]]>
</script>
<script type="text/javascript">//<![CDATA[

var converter = new Showdown.converter();
	
function formatIssue(issue) {
	return '<li class="issue"><span class="issuetitle"><a href="' + issue.html_url
				+ '">' + issue.title 
				+ '</a> (' + issue.state + ') '
				+ '<span class="issueowner"> - posted by: <a href="' + issue.user.url + '">' 
				+ issue.user.login + '</a></span></span>' 
				+ '<div class="issuebody">' + converter.makeHtml(issue.body) + '</div></li>';
}

$(function() {
    $.ajax({
		url: 'https://api.github.com/repos/hflicka/arden2bytecode/issues',
		dataType: 'jsonp'
	}).done(function(result) {
		$('#arden2bytecode').empty();
		$.each(result.data, function(index, issue) {
			$('#arden2bytecode').append(formatIssue(issue));
		});
	});
	$.ajax({
		url: 'https://api.github.com/repos/hflicka/ardensyntax-eclipse-plugin/issues',
		dataType: 'jsonp'
	}).done(function(result) {
		$('#eclipseplugin').empty();
		$.each(result.data, function(index, issue) {
			$('#eclipseplugin').append(formatIssue(issue));
		});
	});
});
//]]>
</script>

<?php include "includes/foot.php"; ?>
