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
define('C7HISTORY_ROOTDIR', plugin_dir_path(__FILE__));
define('C7HISTORY_URLPLUGIN', plugin_dir_url( __FILE__ ));

// Llamando al archivo del panel de configuración
require_once(C7HISTORY_ROOTDIR . 'history-setting.php');
?>
