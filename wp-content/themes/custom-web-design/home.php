<?php
/**
 * The template for displaying the Blog landing page.
 *
 * Adapted from index.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Big_Little_M
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				
				<div class="container" style="background:none; padding:5px;">

				<div class="row">

				<div class="col-sm-6 col-md-4">
				
				<a href="http://www.biglittlem.com/blog" class="blog-blm">
		
				<img src="http://localhost:8888/wordpress-blm/wp-content/uploads/2015/12/littlem-white500.png" alt="Big Little M | Boutique Web Studio" class="biglittlem center-block"> 
				
				</a>
				
				<h1 class="blog-blm"><a href="http://www.biglittlem.com/blog" class="blog-blm">BIG LITTLE BLOG</a></h1>

				</div>
				
				<div class="col-sm-6 col-md-8">
				
				<div class="blog-blm">
				
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div>
		</div>
		</div>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
