<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package presscore
 * @since presscore 0.1
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<article id="post-0" class="post no-results not-found">
	<h1 class="entry-title"><?php _e( 'Nothing Found', 'the7mk2' ); ?></h1>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'the7mk2' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'the7mk2' ); ?>
</p>
		<?php get_search_form(); ?>
<br>
<h2 style="text-align: center" class="vc_custom_heading">Ничего не нашли? Помогите нам сделать навигатор лучше:<br> напишите нам свой вопрос и мы ответим на него и улучшим навигатор</h2>
<br>
<div align="center">
<a href="http://www.uspeshnye-siroty.ru/zadat-vopros/" class="vc_general vc_btn3  vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-flat vc_btn3-color-turquoise " style="display: inline-block; text-decoration:none">Задать вопрос</a>
</div>

	<?php else : ?>

		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'the7mk2' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</article><!-- #post-0 .post .no-results .not-found -->
