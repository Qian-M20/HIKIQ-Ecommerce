wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'fancy-quote',
        label: 'Fancy Quote',
    } );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'underline',
        label: 'Underline',
    } );
} );


wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/gallery', {
        name: 'red-gallery',
        label: 'Red Gallery',
    } );
} );
