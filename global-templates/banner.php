<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
<div class="banner-container padding-full" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
    <div class="container">
        <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
        <?php the_field('banner'); ?>
    </div>

</div>  