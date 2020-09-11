<?php
/*
Plugin Name: Testing Plugin 1
Description: Testing a New Dimension
Version : 1.0
Author : Saurav Raj
*/


class SRTest {
	private $sr_test_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'sr_test_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'sr_test_page_init' ) );
	}

	public function sr_test_add_plugin_page() {
		add_menu_page(
			'SR Test', // page_title
			'SR Test', // menu_title
			'manage_options', // capability
			'sr-test', // menu_slug
			array( $this, 'sr_test_create_admin_page' ), // function
			'dashicons-admin-generic', // icon_url
			71 // position
		);
	}

	public function sr_test_create_admin_page() {
		$this->sr_test_options = get_option( 'sr_test_option_name' ); ?>

		<div class="wrap">
			<h2>SR Test</h2>
			<p>SR Test Plugin Settings</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'sr_test_option_group' );
					do_settings_sections( 'sr-test-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function sr_test_page_init() {
		register_setting(
			'sr_test_option_group', // option_group
			'sr_test_option_name', // option_name
			array( $this, 'sr_test_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'sr_test_setting_section', // id
			'Settings', // title
			array( $this, 'sr_test_section_info' ), // callback
			'sr-test-admin' // page
		);

		add_settings_field(
			'your_name_0', // id
			'Your Name', // title
			array( $this, 'your_name_0_callback' ), // callback
			'sr-test-admin', // page
			'sr_test_setting_section' // section
		);

		add_settings_field(
			'your_age_1', // id
			'Your Age', // title
			array( $this, 'your_age_1_callback' ), // callback
			'sr-test-admin', // page
			'sr_test_setting_section' // section
		);
	}

	public function sr_test_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['your_name_0'] ) ) {
			$sanitary_values['your_name_0'] = sanitize_text_field( $input['your_name_0'] );
		}

		if ( isset( $input['your_age_1'] ) ) {
			$sanitary_values['your_age_1'] = sanitize_text_field( $input['your_age_1'] );
		}

		return $sanitary_values;
	}

	public function sr_test_section_info() {

	}

	public function your_name_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="sr_test_option_name[your_name_0]" id="your_name_0" value="%s">',
			isset( $this->sr_test_options['your_name_0'] ) ? esc_attr( $this->sr_test_options['your_name_0']) : ''
		);
	}

	public function your_age_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="sr_test_option_name[your_age_1]" id="your_age_1" value="%s">',
			isset( $this->sr_test_options['your_age_1'] ) ? esc_attr( $this->sr_test_options['your_age_1']) : ''
		);
	}

}
if ( is_admin() )
	$sr_test = new SRTest();

/*
 * Retrieve this value with:
 * $sr_test_options = get_option( 'sr_test_option_name' ); // Array of All Options
 * $your_name_0 = $sr_test_options['your_name_0']; // Your Name
 * $your_age_1 = $sr_test_options['your_age_1']; // Your Age
 */

?>
