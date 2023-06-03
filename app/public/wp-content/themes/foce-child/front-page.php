<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="bannner__video" preload autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
                <source src="<?php echo get_template_directory_uri() . '/assets/images/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?>" type=video/mp4>
                <source src="<?php echo get_template_directory_uri() . '/assets/images/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?>" type="video/webm">
            </video>

            <img class="banner__img-mobile" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="bannière Fleurs d'oranger & chats errants">
            <img id="banner__title" class="banner__title" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <!-- <div class="story__div"> -->
                <!-- <div> -->
                    <h2 class="story__title">L'histoire</h2>
                <!-- </div> -->
            <!-- </div> -->
            
            <article id="" class="story__article">
                <p class="paragraphe"><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <?php 
            get_template_part( 'template-parts/section-slider' ); 
            ?>

            <article id="place">
                <div>
                    <h3 class="story__title">Le Lieu</h3>
                    <p class="paragraphe"><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>
        <section id="studio">
            <h2 class="">Studio Koukaki</h2>
            <div class="paragraphe">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <?php get_template_part( 'template-parts/section-oscar' ); ?>
    </main><!-- #main -->

<?php
get_footer();
