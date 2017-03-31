<?php
// Creando una opción en el menú del dashboard
add_action('admin_menu', 'c7hd_customer_options');
function c7hd_customer_options() {

    //create new top-level menu
    add_options_page('History Developer', 'History Developer', 'manage_options', 'c7hd-setting.php', 'c7hd_settings_page' );
}

function c7hd_settings_page() { ?>
    <div class="wrap">
        <h1>History Developer</h1>
        <p>Have a history of what you are building in the project.</p>

        <form method="post" action="options.php">

            <div class="o612-form-group">
                <label for="c7hd" class="c7hd-label">Input your note:</label>
                <textarea name="nota" class="c7hd-input"></textarea>
            </div>

            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Guardar notas">
            </p>

        </form>
    </div>
    <?php
}
?>
