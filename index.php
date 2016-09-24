<?php
/* LANG INDICATOR */
include_once 'lang.php';
/* BASIC INFO */
include_once 'info.php';
/* PAGE INDICATOR */
$pageName = basename($_SERVER['PHP_SELF']);
?>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="<?php echo $meta_title; ?>">
	<title><?php echo $website; ?> | Home</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" >
	<link rel="stylesheet" href="css/master.css" type="text/css" media="all" >
	<script src="js/jquery.js" charset="utf-8"></script>
	<script src="js/bootstrap.js" charset="utf-8"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#"><?php echo $website; ?></a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	      <li class="active"><a href="/"><?php echo $lang['home']; ?></a></li>
	      <li><a href="/contact"><?php echo $lang['contact']; ?></a></li>
	      <li><a href="/gamb"><?php echo $lang['contact']; ?></a></li>
	      <li><a href="/rulers"><?php echo $lang['rulers']; ?></a></li>
				<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lang<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/">EN</a></li>
          <li><a href="/?lang=sk">SK</a></li>
          <li><a href="/?lang=cz">CZ</a></li>
        </ul>
	    </ul>
	  </div>
	</nav>
</body>
<footer id="footer">
	<div class="text-center">
		<p><?php echo $lang['Gen'];?></p>
	</div>
</footer>
</html>
