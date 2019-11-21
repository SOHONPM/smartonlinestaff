<!-- Form & text -->
<section class="form-text-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="text-block">
					<?php if( get_sub_field('heading') ) : ?>
						<h2><?php the_sub_field( 'heading' ); ?></h2>
					<?php endif; ?>	
					<?php if( get_sub_field('content') ) : ?>
						<?php  echo get_sub_field( 'content' ); ?>	
					<?php endif; ?>
				</div>
				<?php if( get_sub_field('image') ) : ?>
					<div class="image-block">
						<?php echo wp_get_attachment_image(get_sub_field( 'image' ), 'full'); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-4">

				<?php if( get_sub_field('form') ) : ?>
					<div class="form-block">
						<!-- form-extra -->
						<div class="form-extra">
							<div class="form-extra__header">
								<h3><?php echo get_sub_field( 'form_title' ); ?></h3>
							</div>
							<?php echo get_sub_field('form') ?>				
						</div> 
						<!-- .form-extra -->				
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>
<!-- .Form & text -->