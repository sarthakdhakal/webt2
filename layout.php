<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">this is logo block</div>
		<div class="contact">this is contact block</div>
	</header>
	<section>
		<div class="leftbar">
			<ul>
				<li><a href="index.php">Home Page</a></li>
				<li><a href="personlist-page.php">Person List</a></li>
				<li><a href="addperson-page.php">Add Person</a></li>

				<li><a href="addmessage-page.php">Add Message</a></li>
				<li><a href="messagelist-page.php">Message List</a></li>
			</ul>
		</div>
		<div class="mainbar">
			<?php echo $content;?> 
		</div>
		<div class="rightbar">This is right bar</div>
	</section>
	<footer>
		This is footer
	</footer>
</body>
</html>