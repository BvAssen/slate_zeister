<?php
/*
Template Name: About template
*/
?> 

<?php get_header(); ?>
<div class="u-gridContainer">

	<?php if (have_posts()) : while (have_posts()) : the_post(); 

		$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));

		?>

		<article class="Dienst u-gridRow" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div class="Dienst-content u-gridCol8">
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
			<div class="About-sidebar u-gridCol4">
		<!-- 		<div class="Home-box" style="background-image: url(' <?php echo $url ?>');">
					<a href="<?php echo get_permalink(); ?>">
						<div class="Homebox-header">
							<div class="Homebox-background">
								<p class="Home-title"><?php the_title(); ?></p>
							</div>
						</div>
					</a>
				</div> -->

				<?php get_sidebar('sidebarabout'); ?>
				<a href="/vraag-offerte-aan"><img src="/files/2014/06/offerte.png"></img></a>
				<ul class="Usp-list">
					<li class="icon check">NOA Afbouwgarantie</li>
					<li class="icon check">Afspraak = Afspraak</li>
					<li class="icon check">Hoge kwaliteit</li>
					<li class="icon check">Snelle realisatie</li>
					<li class="icon check">Scherpe prijzen</li>
					<li class="icon check">Flexibiliteit</li>
				</ul>
			</div>

		</article>
		
		<nav>
			<div><?php previous_post_link('&laquo; %link') ?></div>
			<div><?php next_post_link('%link &raquo;') ?></div>
		</nav>

		

	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
