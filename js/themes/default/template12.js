/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

// Register a template definition set named "default".
CKEDITOR.addTemplates( 'default',
{
	// The name of the subfolder that contains the preview images of the templates. 
        // CKEDITOR.plugins.getPath( 'templates' ) + 
	imagesPath : CKEDITOR.getUrl( '../images/' ),
 
	// Template definitions.
	templates :
		[
			{
				title: 'My Template 1',
				image: 'download1.jpg',
				description: 'Description of My Template 1.',
				html:
					'<h2>Template 1</h2>' +
					'<p><img src="/logo.png" style="float:left" />Type your text here.</p>'
			},
			{
				title: 'My Template 2',
                                image: 'download.jpg',
				html:
					'<h3>Template 2</h3>' +
					'<p>Type your text here.</p>'
			}
		]
});