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
		<link rel="mask-icon" href="/favicon.svg" color="#000000">
		<link rel="icon" type="image/ico" href="/favicon.ico">

		<?php wp_head(); ?>
		<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	</head>
	
<body>
