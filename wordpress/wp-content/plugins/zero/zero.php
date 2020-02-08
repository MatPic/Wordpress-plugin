<?php
/*
Plugin Name: MatPic Plugin
Plugin URI: http://mateopiccarreta.fr
Description: Un plugin cool
Version: 0.1
Author: MatPic
Author URI: http://mateopiccarreta.fr
*/

class Zero_Plugin
{
    public function __construct()
    {
        include_once __DIR__.'/pagetitle.php';
        new Zero_Page_Title();
        include_once __DIR__.'/newsletter.php';
        new Zero_Newsletter();
        register_activation_hook(__FILE__, array('Zero_Newsletter', 'install'));
        register_uninstall_hook(__FILE__, array('Zero_Newsletter', 'uninstall'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
        include_once __DIR__.'/recent.php';
        new Zero_Recent();
    }
    public function add_admin_menu()
    {
        add_menu_page('Prems Plug', 'MatPic plugin', 'manage_options', 'zero', array($this, 'menu_html'), 'dashicons-email', 25);
        add_submenu_page('zero', 'Apercu', 'Apercu', 'manage_options', 'zero', array($this, 'menu_html'));
    }
    public function menu_html()
    {
        echo '<h1>'.get_admin_page_title().'</h1>';
        echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
    }
}

new Zero_Plugin();