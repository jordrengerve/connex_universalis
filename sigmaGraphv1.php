<script>
	$().ready(function() {
		var debugging = true;
		
		<?php
			
			if( (isset($_COOKIE["DEBUGGING_GRAPHSIGMA"] )) or (isset($_COOKIE["DEBUGGING_ALL"] )) ) {
				echo ("debugging = true;");
			}
			
		?>	
		
		setGraphSize(debugging);
		loadSigmaGraph();	
		
	});
</script>

<!-- DEBUT CONTENU -->

<!-- GRAPH -->

<div id="container_box">
	<div id="sigma_container"></div>
</div>

<div id="navigation_help">
	<div>Navigation:</div>
	<ul>
	<li>On a computer, you can zoom in and out using mouse scroll</li>
	<li>On smartphone, you can use pinch in an out for zoom and rotate</li>
	</ul>
</div>

