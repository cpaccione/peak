wp.domReady( () => {

	wp.blocks.registerBlockStyle( 'core/separator', {
		name: 'container-900',
		label: 'separator container - max-width 1000px',
	} );

	wp.blocks.registerBlockStyle( 'core/paragraph', {
		name: 'container-1000',
		label: 'Paragraph container - max-width 1000px',
    } );

    wp.blocks.registerBlockStyle( 'core/paragraph', {
		name: 'container-700',
		label: 'Paragraph container - max-width 700px',
    } );
    
    wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'container-1000',
		label: 'Paragraph container - max-width 1000px',
    } );
    
    wp.blocks.registerBlockStyle( 'core/group', {
		name: 'container-1000',
		label: 'Paragraph container - max-width 1000px',
	} );

} );