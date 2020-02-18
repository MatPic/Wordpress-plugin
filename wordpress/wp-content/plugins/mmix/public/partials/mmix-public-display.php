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
 
 function mmix_public_display ($candidates) {
     ob_start();
     if ($candidates->have_posts()):
         while ($candidates->have_posts()): $candidates->the_post();
?>
    <ul>
        <li><?= get_the_ID()?></li>
    </ul>
<?php
    endwhile;
    endif;
    return ob_get_clean();
 }
 
?>
