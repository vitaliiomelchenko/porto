<?php
/**
 * Lost password confirmation text.
 *
 * @version 3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notice( __( 'Пароль для сброса пароля отправлен.', 'woocommerce' ) );
?>

<div class="featured-box align-left">
	<div class="box-content">
		<p><?php echo esc_html( apply_filters( 'woocommerce_lost_password_confirmation_message', __( 'Письмо для сброса пароля было отправлено на адрес электронной почты, указанный в файле для вашей учетной записи, но это может занять несколько минут, чтобы отобразиться в вашем почтовом ящике. Пожалуйста, подождите не менее 10 минут, прежде чем пытаться сделать еще один сброс.', 'porto' ) ) ); ?></p>
	</div>
</div>
