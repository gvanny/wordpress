<?php

/*****************************************************************************

 * Implantación / Implantation:
	Añadir al fichero "functions.php" del Theme Child (Wordpress).
	Add to the file "functions.php" of the Theme Child (Wordpress).

 * Funcionalidad / Functionality:
	Personalización del logo para el backend.
	Logo customization for the backend.

 ****************************************************************************/

/* Cambiar logo backend */
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { 
		background-image:url('.get_stylesheet_directory_uri().'/images/logo.svg) !important;
		background-size:245px auto !important; 
		width: 100% !important;
		height: 115px !important;
	}
    </style>';
}

add_action('login_head', 'my_custom_login_logo');
