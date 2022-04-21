<?php
// custom hook
function hook_css() {
    ?>
        <style>
            .header-container {
                background-color: #d6d0dd;
                }
        </style>
    <?php
}
add_action('wp_head', 'hook_css');

function hook_js() {
	?>
	<script>
		alert('Welcome to Priya Kitchen');

    </script>
<?php
}
add_action('wp_head', 'hook_js', -1000);