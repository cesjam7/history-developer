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
    // Obtener el orden de la nota a guardar
    $number_notes = get_option('c7hd_note');
    if(empty($number_notes)) $number_notes = 0;

    // Guardar el nuevo numero de orden
    register_setting( 'c7hd_register_options', 'c7hd_note' );

    // Guardar la nota
    register_setting( 'c7hd_register_options', 'c7hd_note_'.$number_notes );
}

function c7hd_settings_page() { ?>
    <div class="wrap">
        <h1>History Developer</h1>
        <p>Have a history of what you are building in the project.</p>

        <form method="post" action="options.php">

            <?php // Funciones necesarias para almacenar la información
            settings_fields('c7hd_register_options');
            do_settings_sections('c7hd_register_options');

            // Obtener el numero de orden para la nota
            $number_notes = get_option('c7hd_note');
            if(empty($number_notes)) $number_notes = 0; ?>

            <input type="hidden" name="c7hd_note" value="<?php echo ($number_notes + 1); ?>">

            <div class="c7hd-form-group">
                <label for="c7hd" class="c7hd-label">Input your note:</label>
                <textarea name="c7hd_note_<?php echo $number_notes; ?>[note]" class="c7hd-input" rows="6"></textarea>
            </div>
            <input type="hidden" name="c7hd_note_<?php echo $number_notes; ?>[date]" value="<?php echo date('d-m-Y H:i'); ?>">

            <?php submit_button(); ?>

        </form>

        <?php if ($number_notes > 0) { ?>

            <h2>Past Notes</h2>

            <?php for ($i = $number_notes - 1; $i >= 0; $i = $i - 1) {

                $note = get_option('c7hd_note_'.$i); ?>

                <div class="c7hd-note">
                    <p><strong><?php echo $note['date']; ?></strong></p>
                    <p><?php echo $note['note']; ?></p>
                </div>

                <?php
            }

        } ?>

    </div>
    <?php
}
?>
