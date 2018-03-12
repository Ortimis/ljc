<?php
/**
*	@package ljc
*/


// WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'publish' ),
	'nopaging'               => true,
	'posts_per_page'         => '3'
	
);

// The Query
$query_posts = new WP_Query( $args );

// The Loop
if ( $query_posts->have_posts() ) {
?>

<section id="arbeitsphase">

	<div class="container">

		<div class="row">


			<div class="col-sm-8">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php

							while ( $query_posts->have_posts() ) {
								$query_posts->the_post();
								?>
									<h1>Es gibt ein Konzert mit nicht abgelaufenem Datum.</h1>
								<?php
							}
						?>

					</main><!-- #main -->
				</div><!-- #primary -->

			</div><!-- .col- -->

		</div><!-- .row -->

	</div><!-- .container -->

</section>

<?php

} //endif

// Restore original Post Data
wp_reset_postdata();
?>

