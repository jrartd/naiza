<div class="container-fluid eventos" id="eventos">
	<div class="container event">
		<div class="col-xs-12">
			<h1 style=" padding-bottom: 20px;color: white; font-weight: 700;" class="text-center">Eventos</h1>
		</div>
		<div class=" col-md-8 col-md-offset-2 col-xs-12 eve text-center" style="color: white;" >
			<div class="col-md-12 ">
				<div class="col-md-2 col-xs-4 " style="font-size: 20px; font-weight: 700;">Fecha</div>
				<div class="col-md-5 col-xs-4 visible-md visible-lg" style="font-size: 20px; font-weight: 700;">Lugar</div>
				<div class="col-md-3 col-xs-4 " style="font-size: 20px; font-weight: 700;">Ciudad</div>
				<div class="col-md-2 col-xs-4 " style="font-size: 20px; font-weight: 700;">Información</div>
			</div>
			<div class="col-md-12 ">
				<?php query_posts("showposts=5"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<p class="col-md-2 col-xs-4" style="font-size: 16px;color: white;"><?php the_field("fecha");?></p>
				<p class="col-md-5 col-xs-4 visible-md visible-lg" style="font-size: 16px;color: white;"><?php the_field("lugar");?></p>
				<p class="col-md-3 col-xs-4" style="font-size: 16px;color: white;"><?php the_field("ciudad");?></p>
				<p class="col-md-2 col-xs-4" style="font-size: 16px;color: white;"><a href="<?php the_field("link");?>">Ver más</a></p>

				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>
			<h2 class="text-center" style="font-size: 16px;" style="padding-top: 30px;padding-bottom: 30px;">*El cronograma de eventos puede variar según el organizador</h2>
		</div>
	</div>
</div>