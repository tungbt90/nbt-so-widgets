<?php
/*
Widget Name: Netbaseteam Call To Action Button
Description: Call to action button with text, image and icon
Author: Netbaseteam
Author URI: http://netbaseteam.com
*/

class NBTSOW_CTA_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'nbtsow-cta-widget',
			esc_html__('Netbaseteam Call to action button', 'nbtsow'),
			array(
				'description' => esc_html__('Powerful call to action button', 'nbtsow'),
			),
			array(),
			array(
				'title' => array(
					'type' => 'text',
					'label' => esc_html__('Title', 'nbtsow'),
				),

				'quantity' => array(
					'type' => 'slider',
					'label' => esc_html__('Number of products to display', 'nbtsow'),
					'default' => 8,
					'min' => 1,
					'max' => 8,
					'integer' => true
				),
			)
		);

	}

	function initialize() {

		$this->register_frontend_styles(
			array(
				array( 'nbtsow-cta-widget', plugin_dir_url(__FILE__) . 'css/style.css' )
			)
		);

	}

	function get_template_variables($instance, $args) {
		return array(
			'quantity' => $instance['quantity'],
		);
	}

	function get_template_name($instance) {
		return 'default';
	}

	function get_style_name($instance) {
		return '';
	}

}

siteorigin_widget_register('nbtsow-cta-widget', __FILE__, 'NBTSOW_Products_Widget');
