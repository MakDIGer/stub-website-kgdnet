<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kgdnet.ru
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section id="page404" class="d-flex justify-content-center align-items-center">
			<div class="text-center">
				<h1>404</h1>
				<h2>Такой страницы нет</h2>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

	<script>
		setTimeout(function(){
			window.location.href = 'https://kgdnet.ru';
		}, 5 * 1000);
	</script>

<?php
get_footer();
