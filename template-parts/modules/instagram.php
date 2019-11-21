<?php if( get_sub_field( 'show_instagram' ) )  : ?>
<!-- ./The Instagram  -->
 <section class="instagram-feed-area module">
     <div class="container">
         <div class="sec-title text-center">
             <h2>Instagram Feeds</h2>
         </div>
    </div> 
    <div class="container">
        <?php echo do_shortcode('[instagram-feed]') ?>
    </div>
         
     
 </section>
 <!-- ./The Instagram  -->
<?php endif; ?>
