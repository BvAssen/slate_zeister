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

			<div class="Home-box Home-box-schilderwerken">
				<a href="/home"> 
					<div class="Homebox-header">
						<div class="Homebox-background">
							<p class="Home-title">Bereken uw offerte online</p> 
						</div>
					</div>
				</a>
			</div>
				
			<div class="Home-box Home-box-stucwerk">
				<a href="/glad-stucwerk"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Glad stucwerk</p>
					</div>
				</div>
				</a>
			</div>

			<div class="Home-box Home-box-latexspuiten">
				<a href="/latexspuiten"> 
					<div class="Homebox-header">
						<div class="Homebox-background">
							<p class="Home-title">Bereken uw offerte online</p> 
						</div>
					</div>
				</a>
			</div>

		</div>

		<!--////////////////////////////SECOND ROW////////////////////--> 
		<div class="u-gridRow">
			<div class="Home-box Home-box-sierpleisters">
			<a href="/sierpleisters"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Sierpleisters</p>
					</div>
				</div>
				</a>
			</div>

			<div class="Home-box Home-box-italiaansstucwerk">
			<a href="/italiaans-stucwerk"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Italiaans stucwerk</p>
					</div>
				</div>
				</a>
			</div>

			<div class="Home-box Home-box-badkamerafwerking">
			<a href="/latexspuiten"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Badkamer afwerking</p>
					</div>
				</div>
				</a>
			</div>
		</div>

	<!--////////////////////////////THIRD ROW////////////////////--> 
		<div class="u-gridRow">
			<div class="Home-box Home-box-schilderwerk">
				<a href="/latexspuiten"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Schilderwerk</p>
					</div>
				</div>
				</a>
			</div>

			<div class="Home-box Home-box-tegelwerk">
				<a href="/latexspuiten"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Tegelwerk</p>
					</div>
				</div>
				</a>
			</div>

			<div class="Home-box Home-box-vloeren">
				<a href="/latexspuiten"> 
				<div class="Homebox-header">
					<div class="Homebox-background">
						<p class="Home-title">Vloeren</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		</article>



	
	<?php endwhile; endif; ?>
	</div>
<hr class="Home-line"></hr>
	<div class="u-gridContainer">
		<div class="Youtube u-gridCol4">
		<h4 class="Youtube-title">Bekijk onze bedrijfsfilm</h4>
		<iframe width="560" height="315" src="//www.youtube.com/embed/0kkYLdrlnCI" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="Keurmerken">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noa-afbouw.png" />
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/afbouw.png" />
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noa2.png" />
		</div>
	</div>


<?php get_footer(); ?>
