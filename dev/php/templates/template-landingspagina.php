<?php
/*
Template Name: Landingspagina template
*/
?>
<?php get_header(); ?>
	<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class="u-gridCol7">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php if(!is_front_page()) { ?>
					<h2><?php the_title(); ?></h2>
					<?php } ?>
					<div>
						<a href="/home"><img src="/files/2014/06/uw_gespecialiseerd_stukadoorsbedrijf.png"></img></a>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

						<div class="Offer-wrap">
							
							<div class="Offer">
								<div class="u-gridContainer">
									<!-- <h6 class="Offer-heading u-sectionHeading">Aanbiedingen</h6> -->
									<ul class="Offer-slider bxslider">
									<?php
										$args = array(
											'post_type' => 'aanbieding',
										);
										$aanbiedingen = new WP_Query( $args );
										if( $aanbiedingen->have_posts() ) {
											while( $aanbiedingen->have_posts() ) {
												$aanbiedingen->the_post();
												?>
													<div class="Offer-item">
														 
														<a href="<?php echo get_permalink(); ?>">
															<?php 
																if(get_the_post_thumbnail() == "") { 
																	the_content(); 
																} else { 
																	the_post_thumbnail();
																} ?></a>
													</div>

												<?php
											}
										}
										
									?>
								</div>
							</div>  
					 	</div>
					 	<div class="Review">
						<div class="u-gridContainer">
				<ul class="Review-slider bxslider">
					<?php
					$args = array(
						// args here
						'number'       => '16',
						'order'        => 'DESC',

						);

						// The Query
					$referenties_query = new WP_Comment_Query;
					$referenties = $referenties_query->query( $args );

						// Comment Loop
					if ( $referenties ) {

						foreach ( $referenties as $referenties ) {
							?>
							

							<?php
						}
					} else {
						echo 'Geen referenties beschikbaar.';
					}
					?>
				</ul>
		</div>
				<a class="Button Button--review" href="/recensies">Bekijk meer recensies</a>
	</div>
					</div>

		<?php endwhile; endif; ?>

		</div>
		<div class="Usp-col2 u-gridCol4 ">
					
					<!-- <div class="Contactbar-form">
						<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
					</div> -->
					<div class="Offerte">
						<a href="/contact"><img src="/files/2014/06/offerte.png"></img></a>
					</div
				
					<p class="Usp-text"><strong>Het juiste adres met meer dan 10 jaar werkervaring:</strong></p>
					<ul class="Usp-list">
						<li class="icon check">Stucwerk</li>
						<li class="icon check">Spachtelputz</li>
						<li class="icon check">Schilderwerk</li>
						<li class="icon check">Airless spuitwerk</li>
						<li class="icon check">Italiaans stuc</li>
						<li class="icon check">Tedelakt</li>
						<li class="icon check">Tegelzetten</li>
						<li class="icon check">Spackspuiten</p>
						
					</ul>
				</div>
	</div>
	<hr class="Home-line"></hr>
	<div class="u-gridContainer">
		<div class="Youtube u-gridCol4">
		<h4 class="Youtube-title">Bekijk onze bedrijfsfilm</h4>
		<iframe width="560" height="315" src="//www.youtube.com/embed/0kkYLdrlnCI" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="Keurmerken">
			<a href="noa-afbouwgarantie"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noa-afbouw.png" /></a>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/afbouw.png" />
			<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noa2.png" /> -->
		</div>
	</div>


<?php get_footer(); ?>