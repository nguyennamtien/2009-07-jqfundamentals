<?
/* change these if you are not running this in the root dir of a domain */
global $js_dir, $css_dir;
$js_dir = '/js';
$css_dir = '/css';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>jQ Diner <? if ($title) { ?>:: <?=$title?><? }?></title>
	<link href="<?=$css_dir?>/reset.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=$css_dir?>/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<script src="<?=$js_dir?>/jquery-1.3.2.min.js"></script>

	
</head>

<body class="<?=$page?>">
	<div id="header">
		<div id="logo"><a href="index.php">jQ Diner</a></div>
		<ul id="nav">
			<li <? if ($page == 'home') { ?>class="selected"<? } ?>><a href="index.php">Home</a></li>
			<li <? if ($page == 'menu') { ?>class="selected"<? } ?>><a href="menu.php">Menu</a></li>
			<li <? if ($page == 'takeout') { ?>class="selected"<? } ?>><a href="takeout.php">Takeout</a></li>
			<li <? if ($page == 'blog') { ?>class="selected"<? } ?>><a href="blog.php">Blog</a>
				<ul>
					<li><a href="#">Random other thing</a></li>
					<li><a href="#">Random other thing</a></li>
					<li><a href="#">Random other thing</a></li>
				</ul>
			</li>
			<li <? if ($page == 'staff') { ?>class="selected"<? } ?>><a href="staff.php">Staff</a></li>
		</ul>
	</div>