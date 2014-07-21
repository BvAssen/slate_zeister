<?php get_header(); ?>

	<div>
		<div class="u-gridContainer">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div>
			<div class="Dienst-content u-gridCol8">
					<?php the_content(); ?>
			</div>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>

			</article>
			<div class="Single-sidebar u-gridCol4">
				<div class="Diensten-img">
					<a href="/vraag-offerte-aan"><img src="/files/2014/06/offerte.png"></img></a>
				</div>
				<ul class="Usp-list">
					<li class="icon check">NOA Afbouwgarantie</li>
					<li class="icon check">Afspraak = Afspraak</li>
					<li class="icon check">Hoge kwaliteit</li>
					<li class="icon check">Snelle realisatie</li>
					<li class="icon check">Scherpe prijzen</li>
					<li class="icon check">Flexibiliteit</li>
				</ul>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
