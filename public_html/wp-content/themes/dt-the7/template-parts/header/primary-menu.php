<?php
/**
 * Primary menu.
 *
 * @package the7
 * @since 3.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

do_action( 'presscore_before_primary_menu' );

$location = ( isset( $location ) ? $location : 'primary' );

echo '<ul id="' . esc_attr( "{$location}-menu" ) . '" class="' . implode( ' ', presscore_get_primary_menu_class( 'main-nav' ) ) . '" role="menu">';

	presscore_primary_nav_menu( $location );
?> 
<!--
<div style="margin:43px 0px 0px 0px;">
		<a href="http://uspeshnye.evland.ru/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Facebook&redirect_to=http%3A%2F%2Fuspeshnye.evland.ru%2Fwp-admin%2F" title="Войти через Facebook">
		<img width="24px" src="http://uspeshnye.evland.ru/wp-content/uploads/2017/05/face-ic.png" /></a>
		<a href="http://uspeshnye.evland.ru/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Odnoklassniki&redirect_to=http%3A%2F%2Fuspeshnye.evland.ru%2Fwp-admin%2F" title="Войти через Odnoklassniki">
		<img width="24px" src="http://uspeshnye.evland.ru/wp-content/uploads/2017/05/ok-ic.png" /></a>
		<a href="http://uspeshnye.evland.ru/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Vkontakte&redirect_to=http%3A%2F%2Fuspeshnye.evland.ru%2Fwp-admin%2F" title="Войти через VK">
		<img width="24px" src="http://uspeshnye.evland.ru/wp-content/uploads/2017/05/vk-ic.png" /></a>
		<a href="http://uspeshnye.evland.ru/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Google&redirect_to=http%3A%2F%2Fuspeshnye.evland.ru%2Fwp-admin%2F" title="Войти через Google">
		<img width="24px" src="http://uspeshnye.evland.ru/wp-content/uploads/2017/05/g-ic.png" /></a>
		</div>
-->
<?php
echo '</ul>';

do_action( 'presscore_after_primary_menu' );
