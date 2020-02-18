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
 
 function mmix_public_display ($atts, $content) {
     ob_start()
?>
    <ul>
        <li></li>
    </ul>
<?php
    return ob_get_clean();
 }
 
?>
