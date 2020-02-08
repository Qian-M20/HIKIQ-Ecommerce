<?php
register_block_style(
	'core/quote',
	array(
		'name'         => 'blue-quote',
		'label'        => esc_html__( 'Blue Quote', 'sample-theme' ),
		'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
	)
);

?>