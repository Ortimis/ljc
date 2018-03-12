<?php
/**
*	@package ljc
*/

$timenow = date('Y-m-d H:i:s');

// WP_Query arguments
$args = array(
	'post_type'              => 'konzert',
	'post_status'            => 'publish',
	'meta_query'			 => array(
		array(
			'key' => 'datum_und_uhrzeit_ende',
			'compare' => '>',
			'value' => $timenow,
		)
	)
);

// The Query
$query_konzert = new WP_Query( $args );



// The Loop
if ( $query_konzert->have_posts() ) {
?>

<section id="konzerte">

	<div class="container">

		<div class="row">


			<div class="col-sm-8">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php

							while ( $query_konzert->have_posts() ) {
								$query_konzert->the_post();
								?>
									<h1>Es gibt ein Konzert mit nicht abgelaufenem Datum.</h1>
									<h2><?php the_field('konzertort');?></h2>
									Anfang:
									Ende:
									<?php
									the_field('datum_und_uhrzeit_ende');
									?>
									Jetzt:
									<?php
									echo $timenow;
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

