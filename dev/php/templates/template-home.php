<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="Column u-gridContainer">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div>
				<?php the_content(); ?>
					<!-- <p>Welkom op onze nieuwe website
 
Wij zijn een NOA erkend en gespecialiseerd stukadoorsbedrijf dat een zeer goede terugblik heeft op tevreden klanten. Inmiddels zijn wij een veelgevraagde onderneming voor bouwbedrijven,
 
U verlangt naar kwaliteit en daarom zoekt u een professionele en betrouwbare stukadoor. Zeister Stukadoors garandeert  u kwaliteit voor zeer scherpe prijzen, die u mag verwachten van 10 jaar vakmanschap.</p>	 -->
				<!--<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>-->
			</div>
		<?php
			$args = array(
				'post_type' => 'diensten',
				'orderby' => 'date',
				'posts_per_page' => '11',
				'order' => 'ASC'
			);



			$diensten = new WP_Query( $args );
			if( $diensten->have_posts() ) {
				$counter = 1;
				while( $diensten->have_posts() ) {

					$diensten->the_post();

					$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
					$numColumns = 3;
					if($counter % $numColumns == 1) { 
						echo '<div class="u-gridRow">';
					}

					if($counter == 1) { ?>
							<div class="Home-box-offerte">
								<a href="/vraag-offerte-aan">
									<div class="Homebox-header">
										<div class="Homebox-background">
											<p class="Home-title">Offerte aanvragen</p>
										</div>
										<p class="Offerte-title">VRAAG UW OFFERTE AAN</p>
									</div>
								</a>
							</div>
							
					<?php $counter++;
					} 
					?>

						<div class="Home-box" style="background-image: url(' <?php echo $url ?>');">
							<a href="<?php echo get_permalink(); ?>">
								<div class="Homebox-header">
									<div class="Homebox-background">
										<p class="Home-title"><?php the_title(); ?></p>
									</div>
								</div>
							</a>
						</div>

					<?php
					if($counter % $numColumns == 0) {
						echo '</div>';
					}
	
					$counter++;
				}
			}
			else {
				echo '<p>Er zijn momenteel geen diensten</p>';
			}
		?>

		</article>
	<?php endwhile; endif; ?>
	</div>
	<hr class="Home-line"></hr>
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="Youtube u-gridCol6">
				<h4 class="Youtube-title">Bekijk onze bedrijfsfilm</h4>
				<iframe width="100%" height="350px" src="//www.youtube.com/embed/0kkYLdrlnCI" frameborder="0" allowfullscreen></iframe>
			</div>
		
			<div class="Keurmerken u-gridCol6">
				<a href="noa-afbouwgarantie"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noa-afbouw.png" /></a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/afbouw.png" />
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noa2.png" /> -->
			</div>
		</div>
	</div>


<?php get_footer(); ?>
