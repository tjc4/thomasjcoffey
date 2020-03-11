<?php
/**
 * Performance empty report meta box.
 *
 * @package Hummingbird
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<?php if ( ! apply_filters( 'wpmudev_branding_hide_branding', false ) ) : ?>
	<img class="sui-image"
		src="<?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/hummingbird-circle@1x.jpg' ); ?>"
		alt="<?php esc_attr_e( "Let's see what we can improve!", 'wphb' ); ?>">
<?php endif; ?>

<div class="sui-message-content">
	<p>
		<?php
		esc_html_e(
			'Before you can make tweaks to your website let’s find out what can be improved. Hummingbird will run
			a quick performance test, and then give you the tools to make drastic improvements to your website’s load time.',
			'wphb'
		);
		?>
	</p>

	<a class="sui-button sui-button-blue" data-a11y-dialog-show="run-performance-test" id="run-performance-test">
		<?php esc_html_e( 'Test my website', 'wphb' ); ?>
	</a>
</div>

<?php
$this->modal( 'check-performance' );
if ( \Hummingbird\Core\Modules\Performance::is_doing_report() ) : // Show the progress bar if we are still checking files.
	?>
	<script>
		window.addEventListener("load", function(){
			jQuery('#run-performance-test').click();
		});
	</script>
<?php endif; ?>
