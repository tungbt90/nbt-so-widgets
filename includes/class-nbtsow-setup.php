<?php

if (!defined('ABSPATH')) {
	exit;
}



if (!class_exists( 'NBTSOW_Setup' )) {
	class NBTSOW_Setup {
		public function __construct() {
			add_filter('siteorigin_widgets_widget_folders', array($this, 'add_widgets'));
			add_filter('siteorigin_panels_widget_dialog_tabs', array($this, 'add_widget_tabs'), 20);
			add_filter('siteorigin_panels_widgets', array($this, 'add_bundle_groups'), 11);
		}

		// Get all widget
		function add_widgets($folders) {
			$folders[] = NBTSOW_PLUGIN_DIR . 'includes/widgets/';
			return $folders;
		}

		//Create 'NetBaseTeam SiteOrigin Widget' tab
		function add_widget_tabs($tabs) {
			$tabs[] = array(
				'title' => __('NetBaseTeam SiteOrigin Widgets', 'nbtsow'),
				'filter' => array(
					'groups' => array('nbtsow-widgets')
				)
			);
			return $tabs;
		}

		// Get all NetBaseTeam Widget to put to tab
		function add_bundle_groups($widgets) {
			foreach ($widgets as $class => &$widget) {
				if (preg_match('/NBTSOW_(.*)_Widget/', $class, $matches)) {
					$widget['groups'] = array('nbtsow-widgets');
				}
			}
			return $widgets;
		}
	}
}

new NBTSOW_Setup();
