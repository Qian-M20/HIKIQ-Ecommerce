<?php
register_block_style(
	'core/quote',
	array(
		'name'         => 'red-quote',
		'label'        => esc_html__( 'Red Quote', 'ecommerce-theme' ),
		'inline_style' => '.wp-block-quote.is-style-red-quote { background-color: red; }',
	)
);

register_block_style(
	'core/heading',
	array (
		'name'         => 'blue-heading',
		'label'        => esc_html__( 'Blue Heading', 'ecommerce-theme' ),
		'inline_style' => '.is-style-blue-heading { color: blue; }',
	)
);

// register_block_style(
// 	'core/gallery',
// 	array (
// 		'name'         => 'red-gallery',
// 		'label'        => esc_html__( 'Red Gallery', 'ecommerce-theme' ),
// 		'inline_style' => '.is-style-blue-heading { background-color: #f10205; }',
// 	)
// );


?>