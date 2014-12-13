<?php

$settings = Setting::first();
$primary_color = $settings->primary_color;

function dynamic_styles($settings){ ?>

	<style type="text/css">

		.primary_color_background { background:<?= $settings->primary_color; ?>; }
		.primvary_color { color:<?= $settings->primary_color; ?>;; }

		.secondary_color_background { background:<?= $settings->secondary_color; ?>; }
		.secondary_color { color:<?= $settings->secondary_color; ?>; }

		<?= $settings->custom_css ?>

	</style>

<?php } ?>