<?php
/**
 * Template Name: YCBM
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vintageStore
 */

get_header('vintage');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="container1">
		<div class="content">
			<h1 class="h13"><b> Styling Services</b></h1>
			<br>
			<div class"paragraph">
				At <b>ZANA vintage</b>, we believe in the power of everything old becomes new again. We also believe in resuscitating life back into your favorite old items of clothing and your whole closet in general. </div>
				<br>
				<b>That is why we are proud to offer closet styling services that include:</b>
				<li>Thorough edit of your closet with the help of our stylist.</li> 
				<li>Identifying which items have the potential to become one of a kind masterpieces</li> 
				<li>Identifying paired looks based on season.</li> 
				<li>Completing determined alterations.</li> 
				<li>Identifing key new pieces that will complete your look and closet!</li> 
				<br/>
				<div class"schedule" style="font-weight: 500; ">Schedule a quick 15-30 minute call below to find out more and discuss how we can help you reach your style potential! <br> We offer virtual and in-person styling sessions. </div>
			</div>
		</div>
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'ycbm' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
