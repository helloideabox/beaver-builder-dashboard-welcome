<?php

/**
 * Plugin Name: Dashboard Welcome for Beaver Builder
 * Description: Replaces the default WordPress dashboard welcome panel with a Beaver Builder template.
 * Author: Beaver Addons, Achal Jain
 * Author URI: https://wpbeaveraddons.com
 * Version: 1.0.0
 * Copyright: (c) 2016 IdeaBox Creations
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

define( 'DWBB_VER', '1.0.0' );
define( 'DWBB_DIR', plugin_dir_path( __FILE__ ) );
define( 'DWBB_URL', plugins_url( '/', __FILE__ ) );
define( 'DWBB_PATH', plugin_basename( __FILE__ ) );

require_once 'classes/class-dw-admin.php';
