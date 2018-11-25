<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomad-moon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>
		background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>">
		<div class="hero-content white tc">
			
			<h1 class="hero-heading b ma0 mb3 ttu"><?php the_title(); ?></h1>
			
			<?php if( get_field('subhead') ): ?>
				<p class="hero-subhead mt0 ttu"><?php the_field('subhead'); ?></p>
			<?php endif; ?>

			<?php if( get_field('date') ): ?>
				<!-- Convert date to readable format -->
				<p class="f6 date ma0 ttu tracked"><?php echo date("F Y", strtotime(get_field('date'))); ?></p>
			<?php endif; ?>
	
		</div>
	</section>

	<header class="entry-header">
	</header><!-- .entry-header -->

	<?php nomad_moon_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nomad-moon' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nomad-moon' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php nomad_moon_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
