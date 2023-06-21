<?php

get_header();
?>
    <main id="primary" class="site-main">
        <section class="banner">
            <div>
                <video class="banner__video" preload autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
                    <source src="<?php echo get_template_directory_uri() . '/assets/images/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?>" type=video/mp4>
                    <source src="<?php echo get_template_directory_uri() . '/assets/images/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?>" type="video/webm">
                </video>

                <img class="banner__img-mobile" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="bannière Fleurs d'oranger & chats errants">
                <img data-parallax="1.2" id="banner__title" class="banner__title floating" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            
            </div>
            
        </section>
        <section id="story" class="story">
            <div class="story__div fast-rotation-flower">
                <div> 
                    <h2 class="story__div__title">L'histoire</h2>
                </div>
            </div>
             
            <article id="" class="story__article fast-rotation-flower">
                <p class="paragraphe"><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <?php 
            get_template_part( 'template-parts/section-slider' ); 
            ?>

            <article id="place" class="place">
                <div>
                    <div class="place_div">
                        <div> 
                            <h3 class="place_div_title">Le lieu</h3>
                        </div>
                    </div>
                    
                    <p class="place_paragraphe"><?php echo get_theme_mod('place'); ?></p>
                    <div class="place_cloud place_little-cloud"></div>
                    <div class="place_cloud place_big-cloud"></div>
                </div>
            </article>
        </section>
        <section id="studio" class="studio">
            <div class="studio__div fast-rotation-flower">
                <div>
                    <h2 class="studio__div__title">
                        <span class="studio__div__title-first">Studio</span>
                        <span class="studio__div__title-second">Koukaki</span>
                    </h2>
                </div>
            </div>
            <div class="studio__sheet"></div>
            <div class="studio__text">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <?php get_template_part( 'template-parts/section-oscar' ); ?>
    </main><!-- #main -->

<?php
get_footer();
