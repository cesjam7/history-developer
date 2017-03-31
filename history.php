<?php
/*
Plugin Name: C7 History Developer
Plugin URI: http://cesaraquino.com.pe
Description: Have a history of what you are building in the project.
Version: 0.1
Author: César Aquino Maximiliano
Plugin URI: http://cesaraquino.com.pe
*/

// Define tus variables globales para tus rutas
define('C7HD_ROOTDIR', plugin_dir_path(__FILE__));
define('C7HD_URLPLUGIN', plugin_dir_url( __FILE__ ));

// Agregar css para los formularios en el administrador
function c7hd_admin_assets() {
    wp_enqueue_style( 'c7hd_admin_css', C7HD_URLPLUGIN . 'assets/css/main.css', false, '1.0' );
}
add_action( 'admin_enqueue_scripts', 'c7hd_admin_assets' );

// Llamando al archivo del panel de configuración
require_once(C7HD_ROOTDIR . 'history-setting.php');
?>
