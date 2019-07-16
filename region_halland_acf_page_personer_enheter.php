<?php

	/**
	 * @package Region Halland ACF Page Personer Enheter
	 */
	/*
	Plugin Name: Region Halland ACF Page Personer Enheter
	Description: ACF-fält för personer/enheter
	Version: 1.2.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_personer_enheter_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_personer_enheter_field_groups() {

		if (function_exists('acf_add_local_field_group')):

			acf_add_local_field_group(array(
			    'key' => 'group_1000132',
			    'title' => 'Personer/enheter via HAK',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000133',
					    'label' => 'Kontaktperson (Löpnummer HSA-ID = 6 siffror)',
					    'name' => 'name_1000134',
					    'type' => 'text',
					    'instructions' => '',
					    'required' => 0,
					    'conditional_logic' => 0,
					    'wrapper' => [
					        'width' => '',
					        'class' => '',
					        'id' => '',
					    ],
					    'default_value' => '',
					    'placeholder' => '',
					    'prepend' => '',
					    'append' => '',
					    'maxlength' => '',
			        ),
			        1 => array(
			        	'key' => 'field_1000135',
					    'label' => 'Enhet (Löpnummer HSA-ID = bokstaven O eller F följt av 5 siffror)',
					    'name' => 'name_1000136',
					    'type' => 'text',
					    'instructions' => '',
					    'required' => 0,
					    'conditional_logic' => 0,
					    'wrapper' => [
					        'width' => '',
					        'class' => '',
					        'id' => '',
					    ],
					    'default_value' => '',
					    'placeholder' => '',
					    'prepend' => '',
					    'append' => '',
					    'maxlength' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'page',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;
	
	}
	
	// Returnera ingress
	function get_region_halland_acf_page_personer_enheter_person() {
		return get_field('name_1000134');	
	}

	// Returnera navigation text
	function get_region_halland_acf_page_personer_enheter_enhet() {
		return get_field('name_1000136');	
	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_personer_enheter_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_personer_enheter_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_personer_enheter_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_personer_enheter_deactivate');

?>