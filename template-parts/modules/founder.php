<!-- founder -->
<section class="founder-area">
	<div class="container">
		<div class="row">
			<div class="col-md-3 founder-area-left">
				<div class="founder-info">
					<?php if( get_sub_field('image') ) : ?>
						<figure class="founder-image">
							<?php echo wp_get_attachment_image( get_sub_field('image'), 'full' ) ?>
						</figure>
					<?php endif; ?>
					<?php if( get_sub_field('name') ) : ?>
						<h3><?php echo get_sub_field('name') ?></h3>
					<?php endif; ?>
					<?php if( get_sub_field('position') ) : ?>
						<span><?php echo get_sub_field('position') ?></span>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-9 founder-area-right">
				<div class="content-box">
					<?php if( get_sub_field('heading') ) : ?>
						<h2><?php the_sub_field( 'heading' ); ?></h2>
					<?php endif; ?>	
					<?php if( get_sub_field('text') ) : ?>
						<?php  echo get_sub_field( 'text' ); ?>	
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- .founder -->