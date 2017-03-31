<?php
// Creando una opción en el menú del dashboard
add_action('admin_menu', 'c7hd_customer_options');
function c7hd_customer_options() {

    //create new top-level menu
    add_options_page('History Developer', 'History Developer', 'manage_options', 'c7hd-setting', 'c7hd_settings_page' );
}

// Guardando los datos en la tabla options
add_action( 'admin_init', 'c7hd_customer_register_settings' );
function c7hd_customer_register_settings() {
    register_setting( 'c7hd_register_options', 'c7hd-note' );
}

function c7hd_settings_page() { ?>
    <div class="wrap">
        <h1>History Developer</h1>
        <p>Have a history of what you are building in the project.</p>

        <form method="post" action="options.php">

            <?php // Funciones necesarias para almacenar la información
            settings_fields('c7hd_register_options');
            do_settings_sections('c7hd_register_options'); ?>

            <div class="c7hd-form-group">
                <label for="c7hd" class="c7hd-label">Input your note:</label>
                <textarea name="c7hd-note[note]" class="c7hd-input" rows="6"></textarea>
            </div>
            <input type="hidden" name="c7hd-note[date]" value="<?php echo date('d-m-Y H:i'); ?>">

            <?php submit_button(); ?>
        </form>

        <?php $notes = get_option('c7hd-note');
        print_r($notes); ?>

        <h2>Past Notes</h2>
        <div class="c7hd-note">
            <p><strong>07-05-2016 18:02</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="c7hd-note">
            <p><strong>07-05-2016 18:02</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="c7hd-note">
            <p><strong>07-05-2016 18:02</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <?php
}
?>
