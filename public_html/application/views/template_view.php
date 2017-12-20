<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<div id="header">
		<ul>
			<li><a href="/">Main Page</a> </li>
			<li><a href="/Main/contacts">Contacts</a> </li>
			<li><a href="/Blog">Blog main page</a> </li>
			<li><a href="/Blog/category">Blog Category page</a> </li>
            <li><a href="/Portfolio">Portfolio</a></li>
            <li><a href="/Article">Articles</a></li>
		</ul>
	</div>
	<div id="content">
		<?php require 'application/views/'.$contentView.'_view.php' ?>
	</div>
	<div id="footer">
		(c) Hillel MVC Project
	</div>
</body>
</html>
