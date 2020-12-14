<?php

/*****************************************************************************

 * Implantación / Implantation:

	Añadir al fichero "functions.php" del Theme Child (Wordpress).
	Add to the file "functions.php" of the Theme Child (Wordpress).

 * Funcionalidad / Functionality:

	Permitir ficheros SVG en la galería de medios.
	Allow zip files in media to upload.

 ****************************************************************************/

add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
	// Add the file extension to the array
	$existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}


