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
				'image' => array(
					'type' => 'section',
					'label' => esc_html__('Image', 'nbtsow'),
					'hide' => true,
					'fields' => array(
						'upload_image' => array(
							'type' => 'media',
							'label' => esc_html__('Upload Image', 'nbtsow'),
							'library' => 'image',
						),
						'size' => array(
							'type' => 'image-size',
							'label' => esc_html__('Image Size', 'nbtsow'),
						),
						'alt' => array(
							'type' => 'text',
							'label' => esc_html__('Image Alt', 'nbtsow'),
						),
					),
				),
				'headline' => array(
					'type' => 'section',
					'label' => __('Headline', 'so-widgets-bundle'),
					'hide' => true,
					'fields' => array(
						'headline_text' => array(
							'type' => 'text',
							'label' => esc_html__('Headline Text', 'nbtsow'),
						),
						'headline_tag' => array(
							'type' => 'select',
							'label' => __( 'HTML Tag', 'so-widgets-bundle' ),
							'default' => 'h2',
							'options' => array(
								'h1' => __( 'H1', 'so-widgets-bundle' ),
								'h2' => __( 'H2', 'so-widgets-bundle' ),
								'h3' => __( 'H3', 'so-widgets-bundle' ),
								'h4' => __( 'H4', 'so-widgets-bundle' ),
								'h5' => __( 'H5', 'so-widgets-bundle' ),
								'h6' => __( 'H6', 'so-widgets-bundle' ),
								'p' => __( 'Paragraph', 'so-widgets-bundle' ),
							),
						),
					),
				),
				'sub_headline' => array(
					'type' => 'section',
					'label' => __('Sub Headline', 'so-widgets-bundle'),
					'hide' => true,
					'fields' => array(
						'subhead_text' => array(
							'type' => 'text',
							'label' => esc_html__('Sub Headline Text', 'nbtsow'),
						),
						'subhead_tag' => array(
							'type' => 'select',
							'label' => __( 'HTML Tag', 'so-widgets-bundle' ),
							'default' => 'h3',
							'options' => array(
								'h1' => __( 'H1', 'so-widgets-bundle' ),
								'h2' => __( 'H2', 'so-widgets-bundle' ),
								'h3' => __( 'H3', 'so-widgets-bundle' ),
								'h4' => __( 'H4', 'so-widgets-bundle' ),
								'h5' => __( 'H5', 'so-widgets-bundle' ),
								'h6' => __( 'H6', 'so-widgets-bundle' ),
								'p' => __( 'Paragraph', 'so-widgets-bundle' ),
							),
						),
					),
				),
				'button' => array(
					'type' => 'section',
					'label' => __('Button', 'so-widgets-bundle'),
					'hide' => true,
					'fields' => array(
						'button_text' => array(
							'type' => 'text',
							'label' => esc_html__('Button Text', 'nbtsow'),
						),
						'href' => array(
							'type' => 'text',
							'label' => esc_html__('Button Link', 'nbtsow'),
						),
					),
				),
				'order' => array(
					'type' => 'order',
					'label' => __( 'Element Order', 'so-widgets-bundle' ),
					'options' => array(
						'image' => __( 'Image', 'so-widgets-bundle' ),
						'headline' => __( 'Headline', 'so-widgets-bundle' ),
						'sub_headline' => __( 'Sub Headline', 'so-widgets-bundle' ),
						'button' => __( 'Button', 'so-widgets-bundle' ),
					),
					'default' => array( 'image', 'headline', 'sub_headline', 'button' ),
				),
			)
		);

	}

	function get_template_variables($instance, $args) {
		return array(
			'upload_image' => $instance['image']['upload_image'],
			'size' => $instance['image']['size'],
			'alt' => $instance['image']['alt'],
			'headline_text' => $instance['headline']['headline_text'],
			'headline_tag' => $instance['headline']['headline_tag'],
			'subhead_text' => $instance['sub_headline']['subhead_text'],
			'subhead_tag' => $instance['sub_headline']['subhead_tag'],
			'button_text' => $instance['button']['button_text'],
			'href' => $instance['button']['href'],
			'order' => $instance['order'],
		);
	}

	function get_template_name($instance) {
		return 'default';
	}

	function get_style_name($instance) {
		return '';
	}

}

siteorigin_widget_register('nbtsow-cta-widget', __FILE__, 'NBTSOW_CTA_Widget');
