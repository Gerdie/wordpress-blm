<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Big_Little_M
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container" style="background:none; padding:5px;">

		<div class="row">

		<div class="col-sm-6 col-md-4">

		<a href="http://www.biglittlem.com/blog">
		
		<img src="http://localhost:8888/wordpress-blm/wp-content/uploads/2015/12/littlem-white500.png" alt="Big Little M | Boutique Web Studio" class="biglittlem center-block"> 

		</a>
		
		<h1><a href="http://www.biglittlem.com/blog">BIG LITTLE BLOG</a></h1>

		</div>
		
		<div class="col-sm-6 col-md-8">
		<div class="post-blm">

		<?php
		while ( have_posts() ) : the_post();
			
			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>
		
		<a href="http://www.biglittlem.com/blog"><button type="button" class="btn btn-default blog-blm center-block">Back to Blog</button>
		
		</div>
		</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
