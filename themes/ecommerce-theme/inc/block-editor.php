<?php
register_block_style(
	'core/quote',
	array(
		'name'         => 'contact-quote',
		'label'        => esc_html__( 'Contact Quote', 'ecommerce-theme' ),
		'inline_style' => '.wp-block-quote.is-style-contact-quote { background-color: #c11e1c; color:white; font-family:futura; font-size:2em; padding:5px; }',
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