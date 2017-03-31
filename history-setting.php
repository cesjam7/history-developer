<?php
// Creando una opción en el menú del dashboard
add_action('admin_menu', 'c7history_customer_options');
function c7history_customer_options() {

    //create new top-level menu
    add_options_page('History Developer', 'History Developer', 'manage_options', 'c7history-setting.php', 'c7history_settings_page' );
}

function c7history_settings_page() { ?>
    <div class="wrap">
        <h1>History Developer</h1>
        <p>Have a history of what you are building in the project.</p>

        <form method="post" action="options.php">

            <div class="o612-form-group">
                <label for="c7history_key" class="o612-label">Input your note:</label>
                <textarea name="nota" class="c7history-input"></textarea>
            </div>

            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Guardar notas">
            </p>

        </form>
    </div>
    <?php
}
?>
