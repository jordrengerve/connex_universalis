<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
	<title>Connex Universalis</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Robots" content="NOINDEX" />
	<meta http-equiv="PRAGMA" content="NO-CACHE" />
	
	<link rel='stylesheet' type='text/css' href="css/connexuniversalis.css" media="screen"/>
	
	<!-- load jQuery first -->
	<script src="scripts/jquery-3.1.1.min.js"></script>
	<!-- load  sigma graph-->
	<script src="scripts/sigma110/sigma.min.js"></script>
	<script src="scripts/sigma110/plugins/sigma.parsers.json.min.js"></script>
	<!-- load  connect unversalis functions last-->
	<script src="scripts/connexuniversalis.js"></script>
	
</head>

<body>

<!-- DEBUT CONTENU -->

<!-- GRAPH -->
<div id="top_menu">
	<ul>
		<li> <a href="default.php?page=sigmaGraphv1" target="view">sigma graph v1 </a></li>
		<li> <a href="default.php?page=sigmaGraphv2" target="view">sigma graph v2 </a></li>
	</ul>
</div>

<div >
	<?php 
		// comment out this this to desactivate debugging
		setcookie("DEBUGGING_GRAPHSIGMA","true", time() + 60 , "/");
		
		if (empty($_GET['page'])) { 
			include('sigmaGraphv1.php');
		} 
		else { 
			include($_GET['page'] . '.php');
		}		
	?>
</div>


<!-- FOOT NOTE -->
<div id="footnote">
	<?php 
		
		if( isset($_COOKIE["DEBUGGING_GRAPHSIGMA"] ) and ($_COOKIE["DEBUGGING_GRAPHSIGMA"]  == "true" )  ) {	
			// this echo will be used to  print out graph siwing debugging
			echo "<div> debugging mode = " . $_COOKIE["DEBUGGING_GRAPHSIGMA"] . "</div>";
			echo "
				<div id=\"size1\">0</div>
				<div id=\"size2\">0</div>
				<div id=\"size3\">0</div>
				<div id=\"size4\">0</div>
				<div id=\"size5\">0</div>" ;
		} 
	?>
	
	<div id="copyright" >
		&#169; Copyright, 2016, Jord Rolland de Rengerve and Job Nijsen 
	</div>
	<div id="hosting_txs" >
		This Website is hosted for free by <a href="http://www.000webhost.com/">http://www.000webhost.com/</a> 
	</div>
</div>

<!-- FIN CONTENU -->

</body>
</html>
