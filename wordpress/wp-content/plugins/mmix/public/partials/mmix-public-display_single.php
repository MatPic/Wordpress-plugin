<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://mateopiccarreta.fr
 * @since      1.0.0
 *
 * @package    Mmix
 * @subpackage Mmix/public/partials
 */
 
 function mmix_public_display_single ($candidates) {
     ob_start();
?>
<?php
    $type = get_post_meta( get_the_ID(), 'candidat_creation', true );
?>
    <figure class="mmix_card single" data-api="card-content">
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
            <div class="mmix_card__data-content">
                <p class="mmix_card__description"><?= get_post_meta( get_the_ID(), 'candidat_'.strtolower($type).'_description', true ) ?></p>
            </div>
            <div class="mmix_card__footer">
                <div class="mmix_card__details">
                    <?php
                    foreach (get_post_meta( get_the_ID(), 'candidat_contributors', true ) as $contributor):
                        ?>
                        <div class="mmix_card__detail"><span class="emoji"><i class="fas fa-user"></i></span> <?= $contributor ?></div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </figure>
    
<?php
    return ob_get_clean();
 }
 
?>