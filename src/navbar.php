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
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #2060C7" id="OUR-navbar">
	<a class="navbar-brand" href="/">
		FCSTAC	
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			
		</span>
	</button>

	<div class="collapse navbar-collapse" id="nav-content">   
		<ul class="navbar-nav">
			
			<li class="nav-item <?php setnavactive($url, "/about"); ?>">
				<a class="nav-link" href="/about">About</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/news"); ?>">
				<a class="nav-link" href="/news">News</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/recognition-awards"); ?>">
				<a class="nav-link" href="/recognition-awards">Recognition & Awards</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/advocacy"); ?>">
				<a class="nav-link" href="/advocacy">Advocacy</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/professional-development"); ?>">
				<a class="nav-link" href="/professional-development">Professional Development</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/resources"); ?>">
				<a class="nav-link" href="/resources">Resources</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/join-renew"); ?>">
				<a class="nav-link" href="/join-renew">Join/Renew</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/contact"); ?>">
				<a class="nav-link" href="/contact">Contact</a>
			</li>
		</ul>

	</div>
	
</nav>