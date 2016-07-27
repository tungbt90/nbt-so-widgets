<?php

if (!defined('ABSPATH')) {
	exit;
}



if (!class_exists( 'NBTSOW_Setup' )) {
	class NBTSOW_Setup {
		public function __construct() {
			add_filter('siteorigin_widgets_widget_folders', array($this, 'add_widgets'));
		}

		function add_widgets($folders) {
			$folders[] = NBTSOW_PLUGIN_DIR . 'includes/widgets/';
			return $folders;
		}
	}
}

new NBTSOW_Setup();
