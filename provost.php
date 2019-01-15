<?php
/*
Plugin Name: Provost Website Aditions
Plugin URI:   https://ucf.edu
Description:  Adds features for the provost website
Version:      1.0
Author:       Mark Bennett
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  ucf
Domain Path:  /languages
*/



define('UCF_PRO_PATH', plugin_dir_path(__FILE__));
define('UCF_PRO_NAME', plugin_basename(__FILE__));


require_once(UCF_PRO_PATH . '/cpt/initiatives.php');