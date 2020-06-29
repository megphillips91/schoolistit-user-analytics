<?php
/**
 * Plugin Name: SchooListIt User Analytics
 * Plugin URI: http://SchooListIt.com/
 * Description: Rest API for user specific usage analytics gathering. Use with caution. This is certainly a consideration for GDPR and you MUST have user consent to use this plugin. 
 * Author: megphillips91
 * Author URI: http://msp-media.org/
 * Version: 1.1.3
 * License: GPL2+
 * http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

 /*
 SchooListIt User Analytics is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

 SchooListIt User Analytics is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with SchooListIt User Analytics. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
 */

namespace Parent_Checklist_REST;

 // Exit if accessed directly.
 if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Include plugin files
 */
require_once plugin_dir_path( __FILE__ ) . 'src/activation.php';
require_once plugin_dir_path( __FILE__ ) . 'src/endpoints.php';
require_once plugin_dir_path( __FILE__ ) . 'src/admin.php';





?>
