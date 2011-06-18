<?php

class Page
{
	protected $content;

	function __construct($content)
	{
		$this->content = $content;
	}

	function render()
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="area51 @ phpBB - The development site of phpBB Group" />
	<meta name="keywords" content="Forum software, discussion software, free, opensource, development" />
	<title>Area51 @ phpBB.com</title>
	<link href="area51.css" media="all" rel="stylesheet" type="text/css" />
	<link href="header.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrapper">
		<div id="phpbb-header-bar">
		<ul class="phpbb-menu">
			<li class="phpbb-logo"><a href="http://area51.phpbb.com/"><img src="/images/area51.png" alt="area51 @ phpBB" title="area51.phpbb.com" /></a></li>
			<li class="active"><a href="http://area51.phpbb.com">Home</a></li>
			<li><a href="http://tracker.phpbb.com/">Tracker</a></li>
			<li><a href="http://wiki.phpbb.com/">Wiki</a></li>
			<li><a href="http://bamboo.phpbb.com/">Builds</a></li>
			<li><a href="http://code.phpbb.com/">Code Forge</a></li>
			<li><a href="http://area51.phpbb.com/phpBB/">Discussion</a></li>
		</ul>
		<div id="exit-phpbb">
			<a href="http://www.phpbb.com/"><img src="/images/back_phpbb.png" alt="phpBB" title="www.phpbb.com" /></a>
		</div>
		</div>

		<div id="phpbb-sub-header">
			<h1>Welcome to Area51, home of phpBB development</h1>
		</div>

		<div id="main">
			<div id="content">
<?php
	echo $this->content->render();
?>
			</div>
		</div>

	</div>
</body>
</html>
<?php
	}
}