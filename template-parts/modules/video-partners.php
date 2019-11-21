<!-- Video and Partners -->
<section class="video-area">
	<div class="container">
		<div class="sec-title">
			<?php if( get_sub_field('heading') ) : ?>
				<h2><?php the_sub_field( 'heading' ); ?></h2>
			<?php endif; ?>	
		</div>
		<div class="video-holder">
			<?php 
			$video = get_sub_field( 'video' );
			echo do_shortcode('[video src="'. $video .'"]') ?>
		</div>

		<?php if( get_sub_field('subheading') ) : ?>
			<h3><?php  echo get_sub_field( 'subheading' ); ?></h3>		
		<?php endif; ?>
		<?php if( have_rows('list') ) : ?>
		<div class="list grid">
			<?php while( have_rows('list') ) :  the_row(); ?>
			
					<div class="list__item">
						<?php if( get_sub_field('logo') ) : ?>
							<a href="<?php the_sub_field( 'link' ); ?>"><img src="<?php echo get_sub_field( 'logo' ); ?>" /></a>
						<?php endif; ?>
					</div>
				
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<!--  Video and Partners -->