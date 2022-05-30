<?php 

namespace Inc\Api\Callbacks;

class TaxonomyCallbacks
{

    public function taxSectionManager() {
		echo 'Create as many Custom Taxonomies as you want.';
	}

	public function taxSanitize( $input )
	{
		$output = get_option('cptcreator_plugin_tax');
		$new_input = array($input['taxonomy']=>$input);

		if ( isset($_POST["remove"]) ) {
			unset($output[$_POST["remove"]]);

			return $output;
		}
		
		foreach ($output as $key => $value) {
			if ($input['taxonomy'] === $key) {
				$output[$key] = $input;
			} else {
				$output[$input['taxonomy']] = $input;
			}
		}
		return $output;
	}

	public function textField( $args )
	{
		$name = $args['label_for'];
		$option_name = $args['option_name'];
		$input = get_option( $option_name );
		

		echo '<input type="text" class="regular-text" id="' . $name . '" name="' . $option_name . '[' . $name . ']" value="" placeholder="' . $args['placeholder'] . '">';
	}

	public function checkboxField( $args )
	{
		$name = $args['label_for'];
		$classes = $args['class'];
		$option_name = $args['option_name'];
		$checkbox = get_option( $option_name );
		

		echo '<div class="' . $classes . '"><input type="checkbox" id="' . $name . '" name="' . $option_name . '[' . $name . ']" value="1" class=""><label for="' . $name . '"><div></div></label></div>';
	}

	public function checkboxPostTypesField( $args )
	{
		$output = '';
		$name = $args['label_for'];
		$classes = $args['class'];
		$option_name = $args['option_name'];
		$checkbox = get_option( $option_name );

		$post_types = get_post_types(array( 'show_ui' => true ));

		foreach ($post_types as $post) {
			$output .= '<div class="' . $classes . '"><input type="checkbox" id="' . $post . '" name="' . $option_name . '[' . $name . '][' . $post . ']" value="1" class=""><label for="' . $post . '"><div></div></label><strong>' . $post . '</strong></div>';
		}
		

		echo $output;
	}
}