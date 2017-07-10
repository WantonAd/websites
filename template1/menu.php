
<!-- DEBUT MENU -->

<!--<nav class="navbar navbar-default" id="navbartt" style="font-size: 150%;">
  <div class="container-fluid">
	<div class="navbar-header">
	  <a class="navbar-brand" href="./index.php"><b>WantonGraph</b></a>
	</div>
	<ul class="nav navbar-nav">
	  <li id="liacc"><a href="./index.php">Accueil</a></li>
	  <li id="ligal"><a href="./galerie.php">Galerie</a></li>
	  <li id="licon"><a href="./contact.php">Contact</a></li>
	</ul>
  </div>
</nav>-->

<div class="menu col-md-12">
	<div class="col-md-2"></div>
	<div class="col-md-3" style="height: 100%;">
		<div class="titre"><a href="./index.php"><img src="./img/logoW.png" style="height: 100%; width: auto;"/>Wanton Corporation</a></div>
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-5" style="height: 100%;">
		<ul class="trucsnav">
		  <a href="#" id="liacc"><li>Accueil</li></a>
		  <a href="#b" id="liequ"><li>Equipe</li></a>
		  <a href="#c" id="liser"><li>Services</li></a>
		  <a href="#d" id="licon"><li>Contact</li></a>
		</ul>
	</div>
</div>

<style>
	.menu
	{
		width: 100%;
		height: 10%;
		background: rgba(42, 43, 44, 0.7);
		color: white;
		position: fixed;
		z-index: 1000;
	}
	
	.titre a
	{
		color: white;
		text-decoration: none;
		font-size: 150%;
	}
	
	.trucsnav
	{
		height: 100%;
		font-size: 130%;
		display: table;
	}
	
	.trucsnav li, .trucsnav a
	{
		text-align: center;
		vertical-align: middle;
		display: table-cell;
		width: 120px;
	}
	
	.trucsnav a
	{
		color: white;
		text-decoration: none;
		margin-right: 500 px;
	}
	
	.trucsnav a:hover
	{
		background: rgba(250, 250, 250, 0.1);
	}
	
	.bordered
	{
		border: 1px solid black;
	}
	
	.active
	{
		background: #0F0F0F;
		box-shadow: 0px 5px 10px #888888;
	}
	
	.active:hover
	{
		box-shadow: 0px 5px 10px #888888;
	}
</style>
<script>
	  $( document ).ready(function() 
	  {
		$("#liacc").click(function() 
		{
			$('html, body').animate(
			{
				scrollTop: $("#body").offset().top
			}, 500);
		});
	  });
	  
	  $( document ).ready(function() 
	  {
		$("#liequ").click(function() 
		{
			$('html, body').animate(
			{
				scrollTop: $("#b").offset().top
			}, 500);
		});
	  });
	  
	  $( document ).ready(function() 
	  {
		$("#liser").click(function() 
		{
			$('html, body').animate(
			{
				scrollTop: $("#c").offset().top
			}, 500);
		});
	  });
	  
	  $( document ).ready(function() 
	  {
		$("#licon").click(function() 
		{
			$('html, body').animate(
			{
				scrollTop: $("#d").offset().top
			}, 500);
		});
	  });
</script>

<!-- FIN MENU -->
