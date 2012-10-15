<?php
    Header("Cache-Control: must-revalidate");

    $offset = 60 * 10;
    $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
    Header($ExpStr);
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <?php 
        $GIT_REPO_OWNER = "hflicka";
        $GIT_REPO_PREFIX = "https://github.com/" . $GIT_REPO_OWNER;
    ?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Arden2ByteCode Arden Syntax Compiler</title>
	<link rel="stylesheet" href="/style.css" type="text/css" media="all">
	<!--[if lt IE 7]>
    <style type="text/css">
		#container {
			height: 100%;
		}
	</style>
    <![endif]-->
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body>
<div id="container">
	<div id="head">
		<h1><a href="/"><span>Arden2ByteCode Arden Syntax Compiler</span></a></h1>
	<?php include "menu.php"; ?>
	</div>
	<div id="outermain">
		<div id="main">