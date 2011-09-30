<?php 
include_once "php-markdown/markdown.php";
include_once "textile/classTextile.php";


// globals:
$wiki_files_path = 'wiki-files';
$textile = new Textile();
$wiki_files = glob($wiki_files_path . "/{*.md,*.textile}", GLOB_BRACE);
$wiki_files_canonical = array_map("canonicalize_name", $wiki_files);


// helper functions:
function canonicalize_name($filename) {
	$name = basename($filename);
	$name = preg_replace('/(\.md|\.textile)$/', '', $name);
	return str_replace(' ', '-', mb_strtolower($name));
}

function title_from_filename($filename) {
	$name = basename($filename);
	$name = preg_replace('/(\.md|\.textile)$/', '', $name);
	return str_replace('-', ' ', $name);
}

function _render_links_callback($matches) {
	return '<a href="' . canonicalize_name($matches[1]) . '">' .
		$matches[1] . '</a>';
}

function render_links($text) {
	return preg_replace_callback(
            "|\[\[([^\[\]]*)\]\]|",
            "_render_links_callback",
            $text);
}

function render_file($name) {
	global $textile, $wiki_files, $wiki_files_canonical;

	$canonical_name = canonicalize_name($name);
	$key = array_search($canonical_name, $wiki_files_canonical);
	
	if ($key === FALSE) {
		return 'File not found.';
	}
	
	$filename = $wiki_files[$key];
	if (!file_exists($filename)) {
		return 'File not found!';
	}
	
	$file = file_get_contents($filename);
	$result = '<h2><a href="/docs/">Documentation</a>: ' . title_from_filename($filename) . '</h2>';
	if (substr($filename, -strlen('.textile')) == '.textile') {
		$result .= $textile->TextileThis($file);
	} else if (substr($filename, -strlen('.md')) == '.md') {
		$result .= Markdown($file);
	} else {
		return 'No parser for file.';
	}
	
	$result = render_links($result);

	return $result;
}

function render_file_list($link_prefix = '') {
	global $wiki_files, $wiki_files_canonical;
	
	$result = "<ul>\n";
	$files = $wiki_files;
	
	foreach ($files as $idx => $file) {
		$title = title_from_filename($file);
		$html = "<a href=\"" . $link_prefix . $wiki_files_canonical[$idx] . "\">" .
			$title . '</a>';
		$result .= "<li>" . $html . "</li>\n";
	}
	echo $result . "</ul>\n";
}

function render_docs() {
	if (isset($_GET['view']) && !empty($_GET['view'])) {
		$filename = $_GET['view'];
		$filename = preg_replace('{[\/]}', ' ', $filename);	
		echo render_file($filename);
	} else {
		echo render_file('home');
		
		echo "\n<hr>\n<h3>List of Wiki files</h3>\n";
		render_file_list();
	}
}

?>
