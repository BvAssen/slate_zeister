<?php
/*
Template Name: Vakgebieden template
*/
?>
<?php get_header(); ?>
<div class="u-gridRow Content-wrap">
	<div class="u-gridContainer">
		<div class="u-gridCol8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content-article" id="post-<?php the_ID(); ?>">
				<?php if(!is_front_page()) { ?>
				<h2><?php the_title(); ?></h2>
				<?php } ?>
				<div class="Text">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>   
		<div class="Usp-col u-gridCol4">
		<div class="Sidebar-menu">
		<?php
		wp_nav_menu(array(
			'container'=> 'nav',
			'menu' => 'sidebarmenu',
			'container_class' =>'Side-menu',
			'menu_class' => '',
			'theme_location' => 'sidebarmenu',
			'items_wrap' => '<ul id="%1$s" class="Navigation-list--parent %2$s c-shout c-thick">%3$s</ul>',
			'walker' => new Slate_Walker_Nav_Menu()
			));
			?>
		</div> 

			<!-- <div>
				<a class="Button Button--home" href="#"><strong>Meld je nu aan</strong></a>
			</div> 
			<div class="Contactbar-form">
				<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
			</div> -->
				<!-- <ul class="Areas-list">
					<li class="icon check"> Personen & familierecht</li>
					<li class="icon check"> Sociale zekerheidsrecht</li>
					<li class="icon check"> Maatwerk</li>
					<li class="icon check"> Inzicht in de vorderingen</li>
					<p class="Usp-text">van de cursist</p>
					<li class="icon check"> Goede prijs-kwaliteitsverhouding</li>
					<li class="icon check"> Cursisten krijgen het praktijkboek </li>
					<p class="Usp-text">'Rijopleiding In Stappen'</p>
					<li class="icon check"> Een goede service</li>
				</ul> -->

		</div>
	</div>



	<?php get_footer(); ?>
