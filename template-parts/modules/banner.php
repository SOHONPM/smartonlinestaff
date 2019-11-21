  <!-- Banner -->
  <section class="banner banner-home module">
    <div class="container">
       <div class="row">
         <div class="col-lg-8">
             <div class="text-block">
              <?php if( get_sub_field('heading') ) : ?>
                      <h1><?php the_sub_field( 'heading' ); ?></h1> 
               <?php endif; ?>
               <?php if( get_sub_field('subheading') ) : ?>
                      <p><?php the_sub_field( 'subheading' ); ?></p> 
               <?php endif; ?>

               <button class="btn btn-wide btn-video" id="videoBtn">
                  <span>Watch this video</span>
                  <i class="fa fa-play-circle"></i>
               </button>
            </div>
         </div>
         <div class="col-lg-4">
           <div class="banner-form">
                <div class="banner-form__header">
                   <?php if( get_sub_field('form_title') ) : ?>
                         <?php the_sub_field( 'form_title' ); ?> 
                   <?php endif; ?>
                </div>
                <div class="banner-form__body">
                  <?php if( get_sub_field('form') ) : ?>
                        <?php the_sub_field( 'form' ); ?> 
                 <?php endif; ?>
                </div>  
              </div>
         </div>
       </div>  
    </div>
    <div id="vidBox">
      <div id="videCont">
          <video id="videoPopper" plays-inline controls>
              <source src="<?php echo get_sub_field( 'video' );?>" type="video/mp4">
            </video>
      </div>      
    </div>
  </section>
 <!-- ./ Banner -->
