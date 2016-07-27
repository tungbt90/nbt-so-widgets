<?php
/*
Widget Name: Netbaseteam Woocommerce Products
Description: Display Woocommerce Products
Author: Netbaseteam
Author URI: http://netbaseteam.com
*/

class NBTSOW_Products_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct(
			'nbtsow-products-widget',
			esc_html__('Netbaseteam Woocommerce Products', 'nbtsow'),
			array(
				'description' => esc_html__('Simply display Woocommerce Products', 'nbtsow'),
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

siteorigin_widget_register('nbtsow-products-widget', __FILE__, 'NBTSOW_Products_Widget');
