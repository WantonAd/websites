<html>
	<head>
		<title>WantonGraph</title>
		<?php include("./forced.php"); ?>
	</head>
	<body id="body">
		<?php include('./menu.php'); ?>
		<!--<script> $('#liacc').addClass("active"); </script>-->
		<div style="height: 10%; background: rgba(42, 43, 44, 1);"><!-- VIDE POUR MENU --></div>
		
		<!-- PAGE 1 DEBUT // ACCUEIL -->
		<div id="a" class="page">
			<div class="title" style="z-index: 2;">
				<div style="font-size: 3.8vw; padding-top: 10%; color: black;">Wanton Corporation</div>
				<div style="font-size: 1.5vw;">Votre Business, Votre site web</div>
				<br>
				<a href="#" id="parti" class="btn btn-info btn-lg">C'est parti !</a>
			</div>
			<!--<div style="height: 60%; width: 100%; position: absolute; top: 50%; background: linear-gradient(180deg, rgba(255,255,255,0), rgba(255,255,255,1));"></div>
		--></div>
		<!-- PAGE 1 FIN // ACCUEIL -->
		
		<!-- PAGE 2 DEBUT // EQUIPE -->
		<div id="b" class="page">
			<div id="btitle">
				<div style="margin-top: 5%;">
					<div id="bequ">L'Equipe</div>
				</div>
			</div>
			<div id="brow">
				<div class="bguy col-md-3">
					<img src="./img/alex.jpg" width="100%"/>
					<!--<img src="./img/toinou1bon.png" width="100%"/>-->
					<div class="bguyname">Alexandre ROBINE--DECOURCELLE</div>	
					<div class="bguysep"></div>
					Grand <s>Dictat...</s> Directeur, aimé de tous et par dessus tout<br> par ses subordonnés qui lui vouent un culte incroyable.
					<br><br>Ce surhomme est probablement un dieu.<br>
					De plus il est magnifique.
				</div>
				
				<div class="col-md-1"></div>
				
				<div class="bguy col-md-3">
					<img src="./img/toinou.jpg" width="100%"/>
					<!--<img src="./img/marec1bon.png" width="100%"/>-->
					<div class="bguyname">Julien LEMAIRE</div>	
					<div class="bguysep"></div>
					Le grand JUJU !<br>
					Je pense qu'il est inutile d'en dire plus.
					<br><br>
					Enfin même si on pourrait dire qu'il est<br>
					pd comme une raie aussi...<br>
				</div>
				
				<div class="col-md-1"></div>
				
				<div class="bguy col-md-3">
					<img src="./img/toinou1bon.png" width="100%"/>
					<!--<img src="./img/toinou2bon.png" width="100%"/>-->
					<div class="bguyname">Antoine MILLOT-LAMBOLEY</div>	
					<div class="bguysep"></div>
					<s>Pour lui on va faire une vrai description</s><br><br>
					SAL PD DE MERDE<br><br>
					VA MOURRIR DE TON CUL DE RACE
				</div>
			</div>
		</div>
		<!-- PAGE 2 FIN // EQUIPE -->
		
		<!-- PAGE 3 DEBUT // SERVICES -->
		<div id="c" class="page">
			<div id="btitle">
				<div style="margin-top: 5%;">
					<div id="bequ">Les Services</div>
				</div>
			</div>
			<div id="brow">
				<div class="col-md-6 cserv">
					<div class="cice bguy">
						<div class="ciceimg"></div>
					</div>
					<div class="cice bguy"></div>
					<div class="cice bguy"></div>
				</div>
				<div class="col-md-6 cserv">
					<div class="cice bguy"></div>
					<div class="cice bguy"></div>
					<div class="cice bguy"></div>
				</div>
			</div>
		</div>
		<!-- PAGE 3 FIN // SERVICES -->
		
		<!-- PAGE 4 DEBUT // CONTACT -->
		<div id="d" class="page">
			<div id="btitle">
				<div style="margin-top: 5%;">
					<div id="bequ">Contact</div>
				</div>
			</div>
			<div id="dform" style="text-align: center; width: 100%;">
				<form action="envoi.php">
					<div id="dreal" style="width: 80%; height: 65%; margin-top: -7%; margin-left: auto; margin-right: auto;">
						<div class="col-md-6 dsplit">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="basic-addon1">Nom : </span>
								<input type="text" class="form-control" placeholder="Nom" name="nom" required>
							</div>
							<br><br>
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="basic-addon1">Adresse Mail : </span>
								<input type="text" class="form-control" placeholder="Adresse Mail" name="mail" required>
							</div>
							<br><br>
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="basic-addon1">Objet : </span>
								<input type="text" class="form-control" placeholder="Objet" required>
							</div>
							<br><br>
							<div class="input-group input-group-lg">
								<span class="input-group-addon" style="border-right: 1px solid rgba(0,0,0,0.2); border-radius: 6px;">Message : </span>
								<input style="z-index: -1; opacity: 0;">
							</div>
							<div class="input-group input-group-lg" style="width: 100%; height: 20%;">
								<textarea class="form-control" placeholder="Votre message ici" style="width: 100%; height: 100%;" maxlength="500" required></textarea>
							</div>
							<br><br>
							<div class="input-group input-group-lg" style="width: 100%; height: 7%; text-align: center;">
								<input class="form-control" id="subinp" type="submit" value="Envoyer">
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5 dsplit" style="font-size: 150%; text-align: left;">
							L'équipe de Wanton Corporation est ouverte à tous types de projets.<br><br>
							Vous pouvez nous contacter pour nous en soumettre un ou simplement pour obtenir de plus amples renseignements.<br><br>
							Autres informations de contact :<br><br>
							<div class="input-group input-group-lg">
							  <span class="input-group-addon">
								<span class="glyphicon glyphicon-home"></span>
							  </span>
							  <input class="form-control" type="text" value="314 rue des bananes violées" readonly>
							</div>
							<br>
							<div class="input-group input-group-lg">
							  <span class="input-group-addon">
								<span class="glyphicon glyphicon glyphicon-earphone"></span>
							  </span>
							  <input class="form-control" type="text" value="01 23 45 67 89" readonly>
							</div>
							<br>
							<div class="input-group input-group-lg">
							  <span class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							  </span>
							  <input class="form-control" type="text" value="contact@wantoncorp.com" readonly>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- PAGE 4 FIN // CONTACT -->
		
	</body>
	
	<style>
		#subinp
		{
			width: 100%;
			height: 100%;
			background: rgba(0, 220, 233, 0.2);
		}
	
		#subinp:hover
		{
			background: rgba(0, 220, 233, 0.5);
		}
		
		textarea
		{
			resize: none;
		}
		
		@font-face
		{
			font-family: myfont;
			src: url(./font/font.woof2);
		}
	
		html, body
		{
			background: #FFFFFF;
			padding: 0;
			margin: 0;
		}
		
		.page
		{
			width: 100%;
			height: 100%;
		}
		
		#a
		{
			background-image: url('./img/glass.jpg');
			background-repeat: no-repeat;
			background-size: 100% 100%;
			height: 90%;
		}
		
		#parti
		{
			-webkit-transition: all 0.4s ease; /* Safari and Chrome */
			-moz-transition: all .4s ease; /* Firefox */
			-ms-transition: all .4s ease; /* IE 9 */
			-o-transition: all .4s ease; /* Opera */
			transition: all 0.4s ease;
		}
		
		#parti:hover
		{
			transform: scale(1.2);
			background: #0093fc;
		}
		
		.title
		{
			height: 70%;
			width: 100%;
			text-align: center;
			
			-webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
		    -moz-animation: fadein 4s; /* Firefox < 16 */
			-ms-animation: fadein 4s; /* Internet Explorer */
			-o-animation: fadein 4s; /* Opera < 12.1 */
			animation: fadein 4s;
		}

		@keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}

		/* Firefox < 16 */
		@-moz-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}

		/* Safari, Chrome and Opera > 12.1 */
		@-webkit-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}

		/* Internet Explorer */
		@-ms-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}

		/* Opera < 12.1 */
		@-o-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}
		
		#b
		{
			background: rgba(0,0,0,0.1);
		}
		
		#btitle
		{
			width: 100%;
			height: 40%;
			border: 1px solid rgba(0,0,0,0);
			text-align: center;
		}
		
		#bequ
		{
			background: rgba(255,255,255,1);
			width: 35%;
			margin: auto;
			padding: 1%;
			box-shadow: 0px 5px 10px #888888;
			border-radius: 5px;
			font-size: 1.5vw;
			font-family: "myfont";
			font-weight: bold;
			color: rgba(42,43,44,0.8);
			
			-webkit-transition: all .4s ease; /* Safari and Chrome */
			-moz-transition: all .4s ease; /* Firefox */
			-ms-transition: all .4s ease; /* IE 9 */
			-o-transition: all .4s ease; /* Opera */
			transition: all .4s ease;
		}
		
		#bequ:hover
		{
			background: rgba(255,255,255,0.8);
			
			-webkit-transform:rotate(1deg); /* Safari and Chrome */
			-moz-transform:rotate(1deg); /* Firefox */
			-ms-transform:rotate(1deg)); /* IE 9 */
			-o-transform:rotate(1deg); /* Opera */
			transform: rotate(1deg);
			 
			 
			/*transform:scale(1.1, 1);*/
		}
		
		#brow
		{
			height: 70%;
			width: 90%;
			margin: 5%;
			margin-top: -8%;
			background: rgba(0,0,0,0);
			text-align: center;
			padding: auto;
			color: rgba(42,43,44,0.8);
		}
		
		.bguy
		{
			padding: 0;
			height: 100%;
			background: rgba(255,255,255,0.9);
			box-shadow: 0px 5px 10px #888888;
			margin-left: 2%;
			color: rgba(42,43,44,0.8);
		}
		
		.bguy:hover
		{
			background: rgba(255,255,255,0.5);
		}
		
		.bguy img
		{
			-webkit-transition: all .4s ease; /* Safari and Chrome */
			-moz-transition: all .4s ease; /* Firefox */
			-ms-transition: all .4s ease; /* IE 9 */
			-o-transition: all .4s ease; /* Opera */
			transition: all .4s ease;
		}
		
		.bguy img:hover
		{
			-webkit-transform:scale(1.1); /* Safari and Chrome */
			-moz-transform:scale(1.1); /* Firefox */
			-ms-transform:scale(1.1); /* IE 9 */
			-o-transform:scale(1.1); /* Opera */
			transform:scale(1.1);
		}
	
		.bguyname
		{
			color rgba(42,43,44,0.8);
			text-align: center;
			margin-top: 10%;
			margin-bottom: 10%;
			font-size: 1.2vw;
		}
	
		.bguysep
		{
			width: 80%;
			border: 1px solid grey;
			margin-left: 10%;
			margin-bottom: 10%;
		}
	
		#c
		{
			background: rgba(0,0,0,0.05);
		}
		
		.cserv
		{
			height: 100%;
			text-align: center;
		}
		
		.cice
		{
			height: 30%;
			width: 100%;
			margin-bottom: 3%;
		}
		
		#d
		{
			background: rgba(0,0,0,0.1);
		}
		
		.dsplit
		{
			height: 100%;
		}
		
		.stdinput
		{
			height: 7%;
			width: 100%;
			margin-bottom: 10%;
		}
		
		::-webkit-input-placeholder { color: rgba(0,0,0,.4); }
		::-moz-placeholder {color: rgba(0,0,0,.4); }
		:-ms-input-placeholder { color: rgba(0,0,0,.4); } 
		:-o-input-placeholder { color: rgba(0,0,0,.4); } 
	</style>
	<script>
			window.onscroll = function() {menu()}; //Pour actualiser le menu
			menu(); //Pour l'initialisation
			
			/* Fonction pour le dynamiste du menu dans la descente */
			function menu() 
			{	
				var scrt = document.body.scrollTop || document.documentElement.scrollTop;
				var scrh = screen.height;
				
				var x = document.getElementsByClassName("page");
				for(var i = 0; i < x.length; i++)
				{
					var v = Number(getPos(x[i]).y) + Number(x[i].offsetHeight);
					if( (scrt >= Number(getPos(x[i]).y) - Number(scrh/3.5)) && ((Number(getPos(x[i]).y) + Number(x[i].offsetHeight) - Number(scrh/3.5)) > scrt) )
					{
						if(x[i].id == "a") $("#liacc").addClass("active");
						else $("#liacc").removeClass("active");
						if(x[i].id == "b") $("#liequ").addClass("active");
						else $("#liequ").removeClass("active");
						if(x[i].id == "c") $("#liser").addClass("active");
						else $("#liser").removeClass("active");
						if(x[i].id == "d") $("#licon").addClass("active");
						else $("#licon").removeClass("active");
					}
					else
					{
						$(x[i]).removeClass("active");
					}
				}
			}
			/* Fin Menu() */
			
			/* Recupere la position d'un element */
			function getPos(el) 
			{
				// yay readability
				for (var lx=0, ly=0;
					 el != null;
					 lx += el.offsetLeft, ly += el.offsetTop, el = el.offsetParent);
				return {x: lx,y: ly};
			}
			/* Fin getPos() */
			
		$( document ).ready(function() 
		{
			$("#parti").click(function() 
			{
				$('html, body').animate(
				{
					scrollTop: $("#d").offset().top
				}, 500);
			});
		});
	</script>
</html>