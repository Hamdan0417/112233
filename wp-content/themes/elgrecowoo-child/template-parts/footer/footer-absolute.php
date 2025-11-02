<?php if( adswth_option( 'footer_absolute_show' ) ) { ?>
<div id="footer-absolute" class="footer-absolute">
	<div class="container">
		<div class="payment-methods-footer">
			<p>نحن نقبل طرق الدفع التالية:</p>
			<div class="payment-icons">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/visa.png" alt="Visa">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mastercard.png" alt="Mastercard">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/paypal.png" alt="Paypal">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bitcoin.png" alt="Bitcoin">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ethereum.png" alt="Ethereum">
			</div>
		</div>
		<?php if( !empty ( adswth_option( 'footer_absolute_text_primary' ) ) ) { ?>
		<div class="footer-absolute-primary">
			<?php echo adswth_option( 'footer_absolute_text_primary' ); ?>
		</div>
		<?php } //endif; ?>
		<?php if( !empty ( adswth_option( 'footer_absolute_text_secondary' ) ) ) { ?>
		<div class="footer-absolute-secondary">
			<?php echo adswth_option( 'footer_absolute_text_secondary' ); ?>
		</div>
		<?php } //endif; ?>
	</div>
</div>
<?php } //endif; ?>
