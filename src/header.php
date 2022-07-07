<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kgdnet.ru
 */

?>
<!doctype html>
<html lang="ru">
  	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
		<link href="<?php bloginfo('template_directory'); ?>/css/styles.css" rel="stylesheet">
	</head>
	
<body>
