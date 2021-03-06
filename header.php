<?php
/**
 * Header
 *
 * Encabezado principal del tema.
 *
 * @category   Template tag
 * @package    ucuenca
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- esto es para soportar IE 9 y 8  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- esto es para segurar que el viewport se adapte al tamaño de la pantalla  -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

