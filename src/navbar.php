<?php 
	$url = $_SERVER['REQUEST_URI'];
	
	function setnavactive($base, $testurl){
		if($base == $testurl || $base == $testurl . "/"){
			echo "active";
		}
	}
?>
<style>
	.dropdown-item{
		font-weight: 300;
	}
	.nav-link{
		font-weight: 300;	
	}
</style>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="/">
		FCSTAC	
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
</nav>