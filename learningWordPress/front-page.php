<?php

get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">

		<!-- main-column -->

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				 the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>




	</div><!-- /site-content -->

	<?php get_footer();

?>
