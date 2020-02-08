{"filter":false,"title":"newsletter.php","tooltip":"/wordpress/wp-content/plugins/zero/newsletter.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":36,"column":5},"end":{"row":36,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"6bad948c01b40a131a9ce2dddd487a37f32284f9","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":2,"column":33},"end":{"row":2,"column":34},"action":"insert","lines":["-"],"id":27}],[{"start":{"row":9,"column":5},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":21,"column":1},"action":"insert","lines":["<?php","public function form($instance)","{","    $title = isset($instance['title']) ? $instance['title'] : '';","    ?>","    <p>","        <label for=\"<?php echo $this->get_field_name( 'title' ); ?>\"><?php _e( 'Title:' ); ?></label>","        <input class=\"widefat\" id=\"<?php echo $this->get_field_id( 'title' ); ?>\" name=\"<?php echo $this->get_field_name( 'title' ); ?>\" type=\"text\" value=\"<?php echo  $title; ?>\" />","    </p>","    <?php","}"],"id":29}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":30},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":9},"action":"remove","lines":["","    <?php"],"id":31},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":20,"column":5},"action":"remove","lines":["public function form($instance)","    {","        $title = isset($instance['title']) ? $instance['title'] : '';","        ?>","        <p>","            <label for=\"<?php echo $this->get_field_name( 'title' ); ?>\"><?php _e( 'Title:' ); ?></label>","            <input class=\"widefat\" id=\"<?php echo $this->get_field_id( 'title' ); ?>\" name=\"<?php echo $this->get_field_name( 'title' ); ?>\" type=\"text\" value=\"<?php echo  $title; ?>\" />","        </p>","        <?php","    }"],"id":34}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "],"id":35},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"remove","lines":["",""]},{"start":{"row":9,"column":5},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":5},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":36},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":16,"column":1},"action":"insert","lines":["public static function install()","{","    global $wpdb;","","    $wpdb->query(\"CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zero_newsletter_email (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL);\");","}"],"id":37}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":38},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":29,"column":1},"action":"insert","lines":["public function save_email()","{","    if (isset($_POST['zero_newsletter_email']) && !empty($_POST['zero_newsletter_email'])) {","        global $wpdb;","        $email = $_POST['zero_newsletter_email'];","","        $row = $wpdb->get_row(\"SELECT * FROM {$wpdb->prefix}zero_newsletter_email WHERE email = '$email'\");","        if (is_null($row)) {","            $wpdb->insert(\"{$wpdb->prefix}zero_newsletter_email\", array('email' => $email));","        }","    }","}"],"id":42}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "],"id":43},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":91},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":60},"action":"insert","lines":["add_action('wp_loaded', array($this, 'save_email'));"],"id":45}],[{"start":{"row":28,"column":13},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":29,"column":0},"end":{"row":29,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":29,"column":8},"end":{"row":29,"column":12},"action":"remove","lines":["    "],"id":47},{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"remove","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "]},{"start":{"row":28,"column":13},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":25},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":48},{"start":{"row":23,"column":0},"end":{"row":23,"column":12},"action":"insert","lines":["            "]},{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["d"]},{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["i"]},{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":17},"action":"insert","lines":["()"],"id":49}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":18},"action":"insert","lines":["''"],"id":50}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["f"],"id":51},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["i"]},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":[";"],"id":52}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":23},"action":"remove","lines":["die('fin');"],"id":53}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"remove","lines":["    "],"id":54},{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"remove","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "]},{"start":{"row":22,"column":25},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":32},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":57},{"start":{"row":27,"column":0},"end":{"row":27,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":27,"column":16},"end":{"row":27,"column":27},"action":"insert","lines":["die('fin');"],"id":58}],[{"start":{"row":31,"column":5},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":59},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":32,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":["public function add_admin_menu()","    {","        add_submenu_page('zero', 'Newsletter', 'Newsletter', 'manage_options', 'zero_newsletter', array($this, 'menu_html'));","    }"],"id":60}],[{"start":{"row":9,"column":60},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":69},"action":"insert","lines":["add_action('admin_menu', array($this, 'add_admin_menu'), 20);"],"id":62}],[{"start":{"row":35,"column":26},"end":{"row":35,"column":30},"action":"remove","lines":["zero"],"id":63},{"start":{"row":35,"column":26},"end":{"row":35,"column":27},"action":"insert","lines":["P"]},{"start":{"row":35,"column":27},"end":{"row":35,"column":28},"action":"insert","lines":["r"]},{"start":{"row":35,"column":28},"end":{"row":35,"column":29},"action":"insert","lines":["e"]},{"start":{"row":35,"column":29},"end":{"row":35,"column":30},"action":"insert","lines":["m"]},{"start":{"row":35,"column":30},"end":{"row":35,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":35,"column":31},"end":{"row":35,"column":32},"action":"insert","lines":[" "],"id":64},{"start":{"row":35,"column":32},"end":{"row":35,"column":33},"action":"insert","lines":["S"]},{"start":{"row":35,"column":33},"end":{"row":35,"column":34},"action":"insert","lines":["u"]},{"start":{"row":35,"column":34},"end":{"row":35,"column":35},"action":"insert","lines":["b"]},{"start":{"row":35,"column":35},"end":{"row":35,"column":36},"action":"insert","lines":["M"]},{"start":{"row":35,"column":36},"end":{"row":35,"column":37},"action":"insert","lines":["e"]},{"start":{"row":35,"column":37},"end":{"row":35,"column":38},"action":"insert","lines":["n"]},{"start":{"row":35,"column":38},"end":{"row":35,"column":39},"action":"insert","lines":["u"]}],[{"start":{"row":35,"column":32},"end":{"row":35,"column":39},"action":"remove","lines":["SubMenu"],"id":65},{"start":{"row":35,"column":31},"end":{"row":35,"column":32},"action":"remove","lines":[" "]},{"start":{"row":35,"column":30},"end":{"row":35,"column":31},"action":"remove","lines":["s"]},{"start":{"row":35,"column":29},"end":{"row":35,"column":30},"action":"remove","lines":["m"]},{"start":{"row":35,"column":28},"end":{"row":35,"column":29},"action":"remove","lines":["e"]},{"start":{"row":35,"column":27},"end":{"row":35,"column":28},"action":"remove","lines":["r"]},{"start":{"row":35,"column":26},"end":{"row":35,"column":27},"action":"remove","lines":["P"]}],[{"start":{"row":35,"column":26},"end":{"row":35,"column":27},"action":"insert","lines":["z"],"id":66},{"start":{"row":35,"column":27},"end":{"row":35,"column":28},"action":"insert","lines":["e"]},{"start":{"row":35,"column":28},"end":{"row":35,"column":29},"action":"insert","lines":["r"]},{"start":{"row":35,"column":29},"end":{"row":35,"column":30},"action":"insert","lines":["o"]}],[{"start":{"row":36,"column":5},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":37,"column":4},"end":{"row":41,"column":5},"action":"insert","lines":["public function menu_html()","    {","        echo '<h1>'.get_admin_page_title().'</h1>';","        echo '<p>Bienvenue sur la page d\\'accueil du plugin</p>';","    }"],"id":68}],[{"start":{"row":40,"column":8},"end":{"row":40,"column":65},"action":"remove","lines":["echo '<p>Bienvenue sur la page d\\'accueil du plugin</p>';"],"id":69},{"start":{"row":40,"column":8},"end":{"row":44,"column":9},"action":"insert","lines":["?>","    <form method=\"post\" action=\"options.php\">","","    </form>","    <?php"]}],[{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "],"id":70},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":4},"end":{"row":42,"column":8},"action":"insert","lines":["    "],"id":71}],[{"start":{"row":42,"column":8},"end":{"row":42,"column":12},"action":"insert","lines":["    "],"id":72}],[{"start":{"row":42,"column":12},"end":{"row":44,"column":25},"action":"insert","lines":["<label>Expéditeur de la newsletter</label>","<input type=\"text\" name=\"zero_newsletter_sender\" value=\"<?php echo get_option('zero_newsletter_sender')?>\"/>","<?php submit_button(); ?>"],"id":73}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":74},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":75},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":76},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":19},"end":{"row":42,"column":46},"action":"remove","lines":["Expéditeur de la newsletter"],"id":77},{"start":{"row":42,"column":19},"end":{"row":42,"column":20},"action":"insert","lines":["J"]},{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":42,"column":21},"end":{"row":42,"column":22},"action":"insert","lines":[" "],"id":78},{"start":{"row":42,"column":22},"end":{"row":42,"column":23},"action":"insert","lines":["s"]},{"start":{"row":42,"column":23},"end":{"row":42,"column":24},"action":"insert","lines":["u"]},{"start":{"row":42,"column":24},"end":{"row":42,"column":25},"action":"insert","lines":["i"]},{"start":{"row":42,"column":25},"end":{"row":42,"column":26},"action":"insert","lines":["s"]}],[{"start":{"row":42,"column":26},"end":{"row":42,"column":27},"action":"insert","lines":[" "],"id":79}],[{"start":{"row":10,"column":69},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":80},{"start":{"row":11,"column":0},"end":{"row":11,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":68},"action":"insert","lines":["add_action('admin_init', array($this, 'register_settings'));"],"id":81}],[{"start":{"row":48,"column":5},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":82},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":49,"column":4},"end":{"row":52,"column":1},"action":"insert","lines":["public function register_settings()","{","    register_setting('zero_newsletter_settings', 'zero_newsletter_sender');","}"],"id":83}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":84},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":48,"column":5},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":85},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":37,"column":5},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":86},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":5},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":87},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":47,"column":37},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":88},{"start":{"row":48,"column":0},"end":{"row":48,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":48,"column":12},"end":{"row":48,"column":64},"action":"insert","lines":["<?php settings_fields('zero_newsletter_settings') ?>"],"id":89}],[{"start":{"row":55,"column":79},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":90},{"start":{"row":56,"column":0},"end":{"row":56,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":137},"action":"insert","lines":["add_settings_section('zero_newsletter_section', 'Paramètres d\\'envoi', array($this, 'section_html'), 'zero_newsletter_settings');"],"id":91}],[{"start":{"row":57,"column":5},"end":{"row":58,"column":0},"action":"insert","lines":["",""],"id":92},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":4},"end":{"row":59,"column":0},"action":"insert","lines":["",""]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":59,"column":4},"end":{"row":62,"column":1},"action":"insert","lines":["public function section_html()","{","    echo 'Renseignez les paramètres d\\'envoi de la newsletter.';","}"],"id":93}],[{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "],"id":94},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":62,"column":5},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":95},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":48,"column":64},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":96},{"start":{"row":49,"column":0},"end":{"row":49,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":49,"column":12},"end":{"row":51,"column":25},"action":"insert","lines":["<?php settings_fields('zero_newsletter_settings') ?>","<?php do_settings_sections('zero_newsletter_settings') ?>","<?php submit_button(); ?>"],"id":97}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":98},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":99},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":100},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":47,"column":37},"end":{"row":48,"column":64},"action":"remove","lines":["","            <?php settings_fields('zero_newsletter_settings') ?>"],"id":101}],[{"start":{"row":49,"column":69},"end":{"row":50,"column":37},"action":"remove","lines":["","            <?php submit_button(); ?>"],"id":102}],[{"start":{"row":44,"column":49},"end":{"row":46,"column":120},"action":"remove","lines":["","            <label>Je suis </label>","            <input type=\"text\" name=\"zero_newsletter_sender\" value=\"<?php echo get_option('zero_newsletter_sender')?>\"/>"],"id":103}],[{"start":{"row":44,"column":49},"end":{"row":45,"column":37},"action":"remove","lines":["","            <?php submit_button(); ?>"],"id":104}],[{"start":{"row":46,"column":69},"end":{"row":47,"column":37},"action":"insert","lines":["","            <?php submit_button(); ?>"],"id":105}],[{"start":{"row":49,"column":13},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":112},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":50,"column":8},"end":{"row":50,"column":151},"action":"insert","lines":["add_settings_field('zero_newsletter_sender', 'Expéditeur', array($this, 'sender_html'), 'zero_newsletter_settings', 'zero_newsletter_section');"],"id":113}],[{"start":{"row":62,"column":5},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":114},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":4},"end":{"row":64,"column":0},"action":"insert","lines":["",""]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":64,"column":4},"end":{"row":68,"column":1},"action":"insert","lines":["public function sender_html()","{?>","    <input type=\"text\" name=\"zero_newsletter_sender\" value=\"<?php echo get_option('zero_newsletter_sender')?>\"/>","    <?php","}"],"id":115}],[{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "],"id":116},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":53,"column":4},"end":{"row":68,"column":5},"action":"remove","lines":["public function register_settings()","    {","        register_setting('zero_newsletter_settings', 'zero_newsletter_sender');","        add_settings_section('zero_newsletter_section', 'Paramètres d\\'envoi', array($this, 'section_html'), 'zero_newsletter_settings');","    }","    ","    public function section_html()","    {","        echo 'Renseignez les paramètres d\\'envoi de la newsletter.';","    }","    ","    public function sender_html()","    {?>","        <input type=\"text\" name=\"zero_newsletter_sender\" value=\"<?php echo get_option('zero_newsletter_sender')?>\"/>","        <?php","    }"],"id":117},{"start":{"row":53,"column":4},"end":{"row":75,"column":1},"action":"insert","lines":["public function register_settings()","{","    register_setting('zero_newsletter_settings', 'zero_newsletter_sender');","    register_setting('zero_newsletter_settings', 'zero_newsletter_object');","    register_setting('zero_newsletter_settings', 'zero_newsletter_content');","","    add_settings_section('zero_newsletter_section', 'Newsletter parameters', array($this, 'section_html'), 'zero_newsletter_settings');","    add_settings_field('zero_newsletter_sender', 'Expéditeur', array($this, 'sender_html'), 'zero_newsletter_settings', 'zero_newsletter_section');","    add_settings_field('zero_newsletter_object', 'Objet', array($this, 'object_html'), 'zero_newsletter_settings', 'zero_newsletter_section');","    add_settings_field('zero_newsletter_content', 'Contenu', array($this, 'content_html'), 'zero_newsletter_settings', 'zero_newsletter_section');","}","","public function object_html()","{?>","    <input type=\"text\" name=\"zero_newsletter_object\" value=\"<?php echo get_option('zero_newsletter_object')?>\"/>","    <?php","}","","public function content_html()","{?>","    <textarea name=\"zero_newsletter_content\"><?php echo get_option('zero_newsletter_content')?></textarea>","    <?php","}"]}],[{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "],"id":118},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]},{"start":{"row":72,"column":0},"end":{"row":72,"column":4},"action":"insert","lines":["    "]},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]},{"start":{"row":74,"column":0},"end":{"row":74,"column":4},"action":"insert","lines":["    "]},{"start":{"row":75,"column":0},"end":{"row":75,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":75,"column":5},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":119},{"start":{"row":76,"column":0},"end":{"row":76,"column":4},"action":"insert","lines":["    "]},{"start":{"row":76,"column":4},"end":{"row":77,"column":0},"action":"insert","lines":["",""]},{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":77,"column":4},"end":{"row":81,"column":1},"action":"insert","lines":["public function sender_html()","{?>","    <input type=\"text\" name=\"zero_newsletter_sender\" value=\"<?php echo get_option('zero_newsletter_sender')?>\"/>","    <?php","}"],"id":120}],[{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "],"id":121},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"insert","lines":["    "]},{"start":{"row":80,"column":0},"end":{"row":80,"column":4},"action":"insert","lines":["    "]},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":151},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":123},{"start":{"row":51,"column":0},"end":{"row":51,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":51,"column":8},"end":{"row":54,"column":7},"action":"insert","lines":["<form method=\"post\" action=\"\">","    <input type=\"hidden\" name=\"send_newsletter\" value=\"1\"/>","    <?php submit_button('Envoyer la newsletter') ?>","</form>"],"id":124}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "],"id":125},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "],"id":126},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":151},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":127},{"start":{"row":51,"column":0},"end":{"row":51,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":51,"column":8},"end":{"row":51,"column":10},"action":"insert","lines":["?>"],"id":128}],[{"start":{"row":55,"column":15},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":129},{"start":{"row":56,"column":0},"end":{"row":56,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":56,"column":8},"end":{"row":56,"column":13},"action":"insert","lines":["<?php"],"id":130}],[{"start":{"row":37,"column":125},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":134},{"start":{"row":38,"column":0},"end":{"row":38,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":38,"column":8},"end":{"row":39,"column":62},"action":"insert","lines":["$hook = add_submenu_page('zero', 'Newsletter', 'Newsletter', 'manage_options', 'zero_newsletter', array($this, 'menu_html'));","    add_action('load-'.$hook, array($this, 'process_action'));"],"id":135}],[{"start":{"row":39,"column":4},"end":{"row":39,"column":8},"action":"insert","lines":["    "],"id":136}],[{"start":{"row":40,"column":5},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":137},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":4},"end":{"row":42,"column":0},"action":"insert","lines":["",""]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":4},"end":{"row":47,"column":1},"action":"insert","lines":["public function process_action()","{","    if (isset($_POST['send_newsletter'])) {","        $this->send_newsletter();","    }","}"],"id":138}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":139},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":47,"column":5},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":140},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":4},"end":{"row":49,"column":0},"action":"insert","lines":["",""]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":49,"column":4},"end":{"row":61,"column":1},"action":"insert","lines":["public function send_newsletter()","{","    global $wpdb;","    $recipients = $wpdb->get_results(\"SELECT email FROM {$wpdb->prefix}zero_newsletter_email\");","    $object = get_option('zero_newsletter_object', 'Newsletter');","    $content = get_option('zero_newsletter_content', 'Mon contenu');","    $sender = get_option('zero_newsletter_sender', 'no-reply@example.com');","    $header = array('From: '.$sender);","","    foreach ($recipients as $_recipient) {","        $result = wp_mail($_recipient->email, $object, $content, $header);","    }","}"],"id":141}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":142},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":36,"column":5},"end":{"row":37,"column":125},"action":"remove","lines":["","        add_submenu_page('zero', 'Newsletter', 'Newsletter', 'manage_options', 'zero_newsletter', array($this, 'menu_html'));"],"id":143}]]},"timestamp":1581072637115}