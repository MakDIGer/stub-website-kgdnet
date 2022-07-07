<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kgdnet.ru
 */

get_header();
?>
    <div class="wrapper">
        <div class="container-sm">
            <div class="box d-flex flex-column justify-content-center align-items-center">
                <p class="text-center">Теперь тут сайта нет.<br />
                  Тут был ресурс «Домашняя сеть KGDNET.RU».<br />
                  Вы можете оставить сообщение с помощью формы<br />
                  «Обратной связи» ниже.
                </p>
                <h2>Обратная связь</h2>

				<?php the_content(); ?>
				
                <small class="mt-4">
                  * Все поля обязательны для заполнения.<br />
                  Отправляя форму обратной связи, вы даете своё согласие на обработку <a href="#"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="dashed">ваших персональных данных.</a>
                </small>
            </div>
        </div>
    </div>

<?php
get_footer();
