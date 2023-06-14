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
        
        <div class="swiper mySwiper">
                <h3 class="story__title">Les personnages</h3>
            <div class="swiper-wrapper" id="swiper-wrapper">
                <?php

                foreach ($characters_query->posts as $post) {
                    $characters_query->the_post();
                    echo '<div class="swiper-slide">';
                    echo get_the_post_thumbnail($post->ID, 'full');
                    echo '<div>';
                    the_title();
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                <?php
                $main_character = $characters_query->posts[2];
                echo '<div class="swiper-slide">';
                echo get_the_post_thumbnail($main_character->ID, 'full');
                echo '<figcaption>' . $main_character->post_title . '</figcaption>';
                echo '</div>';
                $characters_query->next_post();
                ?>
            </div>
            <div></div>
        </div>
    </div>
</article>