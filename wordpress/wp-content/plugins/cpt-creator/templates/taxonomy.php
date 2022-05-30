<div class="wrap">
	<h1>Taxonomy Manager</h1>
	<?php settings_errors(); ?>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-1">Your Custom Post Types</a></li>
		<li><a href="#tab-2">Add Custom Post Type</a></li>
	</ul>

	<div class="tab-content">
		<div id="tab-1" class="tab-pane active">
            <h3>Your Custom Post Types</h3>
			<?php
			$options = get_option('cptcreator_plugin_tax');

			echo '<table class="cpt-table"><tr><th>ID</th><th>Singular Name</th><th class="text-center">Hierarchical</th><th class="text-center">Actions</th></tr>';

			foreach ($options as $option) {
				$hierarchical = isset($option['has_archive']) ? "TRUE" : "FALSE";

				echo "<tr><td>{$option['taxonomy']}</td><td>{$option['singular_name']}</td><td class=\"text-center\">{$hierarchical}</td><td class=\"text-center\">";

				echo '<form method="post" action="options.php" class="inline-block">';
				settings_fields( 'cptcreator_plugin_tax_settings' );
				echo '<input type="hidden" name="remove" value="' . $option['taxonomy'] . '">';
				submit_button('Delete','delete small','submit',false);

				echo '</form></td></tr>';
			}

				echo '</table>';
			?>
		</div>
	
        <div id="tab-2" class="tab-pane">
		<form method="post" action="options.php">
				<?php 
					settings_fields( 'cptcreator_plugin_tax_settings' );
					do_settings_sections( 'cptcreator_taxonomy' );
					submit_button();
				?>
			</form>
        </div>
	

    </div>
</div>