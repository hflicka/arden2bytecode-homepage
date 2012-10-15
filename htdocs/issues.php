<?php include "includes/head.php"; ?>

<h2>Bug reports</h2>

<p>If you find a bug in Arden2ByteCode, please post it at 
<a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode/issues/new"
><?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode/issues/new</a>.</p>

<h3>Open issues of <a href="<?php echo $GIT_REPO_PREFIX; ?>/arden2bytecode">Arden2ByteCode</a> at GitHub</h3>
<ul id="arden2bytecode" class="issues"><li style="list-style-type: none;">Loading (requires JavaScript)...</li></ul>

<hr>

<h3>Open issues of the <a href="<?php echo $GIT_REPO_PREFIX; ?>/ardensyntax-eclipse-plugin">Arden Syntax Eclipse plugin</a> at GitHub</h3>
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

function escapeHtml(str) {   
	return (str + '')
		.replace(/&/g,'&amp;')
		.replace(/</g,'&lt;')
		.replace(/>/g,'&gt;');
}

function formatIssue(issue) {
	return '<li class="issue"><span class="issuetitle">'
				+ '<a href="' + issue.html_url
				+ '">' + escapeHtml(issue.title)
				+ '</a>'
				+ '<span class="issueowner"> - posted by: <a href="' + issue.user.url + '">' 
				+ issue.user.login + '</a></span></span>' 
				+ '<div class="issuebody">' + converter.makeHtml(issue.body) + '</div></li>';
}

function queryIssues(issuesurl, divselector, clear) {	
	clear = typeof clear !== 'undefined' ? clear : true;
    $.ajax({
		url: issuesurl,
		dataType: 'jsonp'
	}).done(function(result) {
		if (clear) {
			$(divselector).empty();
		}
		$.each(result.data, function(index, issue) {
			$(divselector).append(formatIssue(issue));
		});
		if (result.meta.Link) { // paging
			var next = result.meta.Link.filter(function(obj){return obj[1]['rel']==="next";});
			if (next.length) {
				queryIssues(next[0][0].replace(/callback=\w*&/, ''), divselector, false);
			}
		}
	});
}

$(function() {
	queryIssues('https://api.github.com/repos/<?php echo $GIT_REPO_OWNER; ?>/arden2bytecode/issues', '#arden2bytecode');
	queryIssues('https://api.github.com/repos/<?php echo $GIT_REPO_OWNER; ?>/ardensyntax-eclipse-plugin/issues', '#eclipseplugin');	
});
//]]>
</script>

<?php include "includes/foot.php"; ?>
