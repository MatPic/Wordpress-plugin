<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       contact@leoboyer.fr
 * @since      1.0.0
 *
 * @package    mmix
 * @subpackage mmix/public/partials
 */
function mmix_public_display ($atts, $content) {
    $args = array(
        'post_type' => 'candidat',
        'tax_query'  => array(
                array(
                    'taxonomy' => 'concours',
                    'field' => 'ID',
                    'terms' => $atts['id'],
                )
        )
    );
    $candidates_data = new WP_Query(  );
    $candidates_data->query( $args);
//    die(var_dump($candidates_data));
    ob_start();
    ?>
<div class="mmix-candidatures" data-rest-url="<?= get_rest_url() ?>">
    <?php
        if ($candidates_data->have_posts()):
        while ($candidates_data->have_posts()): $candidates_data->the_post();
            $type = get_post_meta( get_the_ID(), 'candidat_creation', true );
            ?>
            <figure class="mmix_card">
                <div class="mmix_card__hero">
                    <img src="<?= get_post_meta( get_the_ID(), 'candidat_illustration_image', true ) ?>" alt="mmix_card" class="mmix_card__img">
                </div>
                <div class="mmix_card__content">
                    <div class="mmix_card__title">
                        <h1 class="mmix_card__heading"><?= the_title(); ?></h1>
                    </div>
                    <div class="mmix_card__tags">
                        <div class="mmix_card__tag mmix_card__tag--<?= strtolower($type); ?>"><?= $type ?></div>
                    </div>
                    <p class="mmix_card__description"><?= wp_trim_words(get_post_meta( get_the_ID(), 'candidat_'.strtolower($type).'_description', true )) ?></p>
                    <div class="mmix_card__footer">
                        <div class="mmix_card__details">
                            <?php
                            foreach (get_post_meta( get_the_ID(), 'candidat_contributors', true ) as $contributor):
                                ?>
                                <div class="mmix_card__detail"><span class="emoji"><i class="fas fa-user"></i></span> <?= $contributor ?></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="mmix_card_action">
                            <a href="<?= the_permalink() ?>" class="mmix_btn mmix_btn-outline-<?= strtolower($type) ?> js-mmix-view"><i class="fas fa-eye"></i> Voir</a>
                        </div>
    
                    </div>
                </div>
            </figure>
    <?php
        endwhile;
        ?>
    <div id="candidate-modal-wrapper">
        <div id="candidate-modal" class="mmix_card single">
    
        </div>
    </div>
</div>

<?php
    endif;
    return ob_get_clean();
}

?>