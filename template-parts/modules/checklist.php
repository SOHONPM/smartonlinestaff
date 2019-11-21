<section class="checklist-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-title"><?php echo get_sub_field('title') ?></h2>
            </div>
            <?php

            // check if the flexible content field has rows of data
            if (have_rows('checklist')) :

                // loop through the rows of data
                while (have_rows('checklist')) : the_row();
                    ?>
                    <div class="col-md-6">
                        <div class="checklist-block">
                            <p class=""><?php echo get_sub_field('checklist') ?></p>
                        </div>
                    </div>
            <?php

                endwhile;

            else :

            // no layouts found

            endif;
            ?>
        </div>
    </div>
</section>