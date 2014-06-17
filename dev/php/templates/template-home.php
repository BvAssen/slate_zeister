<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="Column u-gridContainer">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>


			</div>
		<!--////////////////////////////FIRST ROW////////////////////--> 
		<div class="u-gridRow">
			<div class="Home-block1 u-gridCol4">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_zeisterstukadoors.svg" /> -->
	    		<img src="http://placehold.it/400x350/2079B0/2079B0">
			</div>

			<div class="u-gridCol4">
	    		<img src="http://placehold.it/400x350/2079B0/2079B0">
			</div>

			<div class="u-gridCol4">
	    		<img src="http://placehold.it/400x350/2079B0/2079B0">
			</div>
		</div>
		<!--////////////////////////////SECOND ROW////////////////////--> 
		<div class="u-gridRow">

		<div class="u-gridCol4">
    		<img src="http://placehold.it/400x350/2079B0/2079B0">
		</div>

		<div class="u-gridCol4">
    		<img src="http://placehold.it/400x350/2079B0/2079B0">
		</div>

		<div class="u-gridCol4">
    		<img src="http://placehold.it/400x350/2079B0/2079B0">
		</div>
		</div>
		<!--////////////////////////////THIRD ROW////////////////////--> 
		<div class="u-gridRow">

		<div class="u-gridCol4">
    		<img src="http://placehold.it/400x350/2079B0/2079B0">
		</div>

		<div class="u-gridCol4">
    		<img src="http://placehold.it/400x350/2079B0/2079B0">
		</div>

		<div class="u-gridCol4">
    		<img src="http://placehold.it/400x350/2079B0/2079B0">
		</div>
		</div>
		</article>

	
	<?php endwhile; endif; ?>
	</div>
	<hr></hr>
	<div class="u-gridContainer">
		<div class="u-gridCol4">
	    		<img src="http://placehold.it/550x350&text=youtube/2079B0/ffff">
		</div>
	</div>


<?php get_footer(); ?>
