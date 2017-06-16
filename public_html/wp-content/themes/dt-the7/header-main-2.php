<?php
/**
 * @since 1.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

	<?php do_action( 'presscore_before_main_container' ); ?>
	
  
   <!-- Фон шапки записей в зависимости от рубрики -->
	<?php 
	if (in_category('4146')) {
	?><div  id="rabota" align="center"> <?php 
	}else{
	if (in_category('4130')) {
	?><div  id="otdih" align="center"> <?php
	}else{
	if (in_category('4149')) {
	?><div  id="semya" align="center"> <?php
	}else{
	if (in_category('4148')) {
	?><div  id="ucheba" align="center"> <?php
	}else{
	if (in_category('4147')) {
	?><div  id="dom" align="center"> <?php
	}else{
	if (in_category('4158')) {
	?><div  id="raznoe" align="center"> <?php
	}else{
	?><div id="raznoe" align="center"> <?php
	}}}}}}
	?>

<!-- Текст в шапке записей -->
	<h2><br/><?php the_category(' > ', 'single'); ?><h2>    
	<?php the_title('<h3 id="hh3">','</h3>'); ?> 

<!-- Старый вариант тегов в шапке записей -->
<!--<h5 id="hh3"><?php the_tags('Теги: ', ', '); ?></h5>-->

<!-- Новый вариант тегов в шапке записей -->
<div id="tags3"><?php the_tags(' ', '  &nbsp '); ?></div>
<br><br>

</div>
	
	<?php if ( presscore_is_content_visible() ): ?>

	<div id="main" <?php presscore_main_container_classes(); ?> <?php presscore_main_container_style(); ?> >

		<?php do_action( 'presscore_main_container_begin' ); ?>

		<div class="main-gradient"></div>
		<div class="wf-wrap">
			<div class="wf-container-main">

				<?php do_action( 'presscore_before_content' ); ?>

	<?php endif; ?>