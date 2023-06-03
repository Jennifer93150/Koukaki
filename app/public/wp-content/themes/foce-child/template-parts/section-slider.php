<?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key'  => '_main_char_field',
        'orderby'   => 'meta_value_num',

    );
    $characters_query = new WP_Query($args);
    ?>
    <article id="characters">
        
        <div class="main-character">
            <h3 class="story__title">Les personnages</h3>
            <swiper-container class="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="false"
    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
            <?php
            
            foreach ($characters_query->posts as $post) {
                echo '<swiper-slide>';
                echo '<figure>';
                echo get_the_post_thumbnail($post->ID, 'full');
                echo '<figcaption>'; 
                the_title(); 
                echo '</figcaption>';
                echo '</figure>';
                echo '</swiper-slide>';
            }
            ?>
            </swiper-container>
        </div>
    </article>
