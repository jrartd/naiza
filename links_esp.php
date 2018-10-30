<?php 
/*
Template name: landlinkses
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Naíza </title>
	<?php 
		$server = "http://naizamusic.com";
		$ruta ="assets/";
	 ?>
</head>
<body>
	<link rel="shortcut icon" type="image/png" href="<?php echo($ruta)?>icon.png"/>
	<link rel="shortcut icon" type="image/png" href="<?php echo($ruta)?>icon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

<style>
	.zero{
		padding: 0px;
	}
	.escuchar{
		border: solid 1px #777;
		font-size: 16px;
		font-weight: 300;
		padding: 10px;
		color: #777;
		border-radius: 8px;
		margin: 5px;
		transition-duration:.2s;

	}
	.escuchar:hover{
		border: solid 1px black;
		background: black;
		font-size: 18px;
		font-weight: 300;
		padding: 10px;
		color: white;
		border-radius: 8px;
		margin: 5px;

	}
	body{
	background-color:#ba007c;
    min-height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<div class="container" style="margin-top:40px; ">
	<div class="main row">
		<div class="col-md-4 col-md-offset-4">
			<img src="<?php echo($ruta)?>cover.png" class="col-xs-12 img-responsive zero" alt="">
			<div class="col-xs-12 zero text-center" style="background: black;color: white;">
				<h1 style="padding: 20px 0px 5px 0px; margin: 0;font-size: 24px;font-weight: 700;">Naíza</h1>
				<p>Elige un servicio de música</p>
			</div>
			<div class="col-xs-12 zero text-center" style="background: white;color: black;">
				<div class="col-xs-12" style="margin: 5px 0px;">
					<a href="https://open.spotify.com/track/6Wb5cjZvxEk1bGCfNIGrs0?si=c0HzHoA5Q6eM-W-Z36SAgg">
						<div class="col-xs-6">
						<img style="padding: 5px;" src="<?php echo($ruta)?>Spotify_logo13.png" class="col-xs-12 img-responsive" alt="">
					</div>
					<div class="col-xs-6">
						<h1 class="col-xs-10 col-xs-offset-1 escuchar">Escuchar</h1>
					</div>
					</a>
				</div>
				<!--
				<div class="col-xs-12" style="margin: 5px 0px;">
					<a href="http://www.deezer.com/search/NICOLE%20PERNIGOTTI">
						<div class="col-xs-6">
							<img style="padding: 5px;" src="<?php echo($ruta)?>580b57fcd9996e24bc43c51b.png" class="col-xs-12 img-responsive" alt="">
						</div>
						<div class="col-xs-6">
							<h1 class="col-xs-10 col-xs-offset-1 escuchar">Escuchar</h1>
						</div>
					</a>
				</div>
			-->
				<div class="col-xs-12" style="margin: 5px 0px;">
					<a href="https://itunes.apple.com/us/album/relajada-single/1438764955">
						<div class="col-xs-6">
							<img style="padding: 5px;" src="<?php echo($ruta)?>Apple_Music_logo.svg_.png" class="col-xs-12 img-responsive" alt="">
						</div>
						<div class="col-xs-6">
							<h1 class="col-xs-10 col-xs-offset-1 escuchar">Escuchar</h1>
						</div>
					</a>
				</div>
				<!--
				<div class="col-xs-12" style="margin: 5px 0px;">
					<a href="https://play.google.com/store/search?q=nicole%20pernigotti&hl=es">
						<div class="col-xs-6">
							<img style="padding: 5px;" src="<?php echo($ruta)?>Google_Play.png" class="col-xs-12 img-responsive" alt="">
						</div>
						<div class="col-xs-6">
							<h1 class="col-xs-10 col-xs-offset-1 escuchar">Escuchar</h1>
						</div>
					</a>
				</div>
			-->
			</div>
		</div>
	</div>
</div>


</body>
</html>