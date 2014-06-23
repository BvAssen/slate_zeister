<?php
/*
Template Name: Offerte template 
*/
?>
<?php get_header(); ?>
	<div class="Content-yellow">
		<div class="u-gridContainer">
				<div class="Contactbar">
			<aside class="u-gridCol8">

					<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
					<div id="map_canvas"></div>
					<div class="Contactbar-form">
					<?php echo do_shortcode('[gravityform id="2" name="Offerte" title="false"]'); ?>
					</div>
				</div>

			</aside>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<aside class="Map u-gridCol2">
					<img class="Offerte-img" src="/files/2014/06/uw_gespecialiseerd_stukadoorsbedrijf.png"></img>
			<iframe class="Offerte-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d78428.93081656318!2d5.238734099999999!3d52.099677100000015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6682112b8b4d7%3A0xbb7eb4374e2b8a76!2sTroelstralaan+18!5e0!3m2!1snl!2snl!4v1403255824567" width="600" height="450" frameborder="0" style="border:0"></iframe>			<?php endwhile; endif; ?>
		</aside>
				<div>
					
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>


				</div>

			
		</div>
	</div>

<?php get_footer(); ?>
