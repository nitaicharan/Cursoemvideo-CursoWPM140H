<?php
/**
 * Setup wizard your site step.
 *
 * @package    RankMath
 * @subpackage RankMath\Admin\Wizard
 */

use RankMath\Helper;
use RankMath\KB;

defined( 'ABSPATH' ) || exit;

?>
<header>
	<h1>
		<?php
		/* translators: sitename */
		printf( esc_html__( 'Your Website: %s', 'rank-math' ), esc_attr( $this->get_site_display_name() ) );
		?>
	</h1>
	<p><?php esc_html_e( 'Let us know a few things about your site&hellip;', 'rank-math' ); ?></p>
</header>

<?php if ( ! Helper::is_whitelabel() ) : ?>
	<div class="rank-math-wizard-tutorial">
		<header>
			<?php
			$allowed_html = [
				'a' => [
					'href'        => [],
					'class'       => [],
					'data-target' => [],
				],
			];
			/* translators: help link */
			printf( wp_kses( __( 'If you are new to Rank Math, <a href="%s" data-target="rank-math-wizard-tabs" class="rank-math-collapsible-trigger">click here</a> to learn more.', 'rank-math' ), $allowed_html ), KB::get( 'your-site' ) );
			?>
		</header>

		<div id="rank-math-wizard-tabs" class="rank-math-collapsible-content rank-math-tabs">
			<div class="rank-math-tabs-navigation rank-math-custom wp-clearfix">
				<a href="#help-panel-video" class="active"><span class="dashicons dashicons-editor-video"></span><?php esc_html_e( 'Setup Tutorial', 'rank-math' ); ?></a>
				<a href="#help-panel-knowledge"><span class="dashicons dashicons-book-alt"></span><?php esc_html_e( 'Knowledge Base', 'rank-math' ); ?></a>
			</div>
			<div class="rank-math-tabs-content rank-math-custom">
				<div id="help-panel-video" class="rank-math-tab">
					<a href="<?php KB::the( 'your-site' ); ?>" target="_blank" style="font-size: 15px; border-bottom: 1px dashed;">
						<?php _e( 'Click here to learn how to setup Rank Math properly', 'rank-math' ); ?>
					</a>
				</div>
				<div id="help-panel-knowledge" class="rank-math-tab">
					<div class="search-form wp-core-ui rank-math-ui">
						<label for="rank-math-search-input"><?php esc_html_e( 'Search the Knowledge Base for answers to your questions:', 'rank-math' ); ?></label>
						<input type="text" class="regular-text" id="rank-math-search-input" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" placeholder="<?php esc_attr_e( 'Type here to search...', 'rank-math' ); ?>" value="">
						<a data-href="https://rankmath.com/kb/wordpress/seo-suite/?ht-kb-search=1&lang=<?php echo get_locale(); ?>&s=" target="_blank" class="button button-primary"><?php esc_html_e( 'Search', 'rank-math' ); ?></a>
					</div>
				</div>
			</div>
		</div>

	</div>
<?php endif; ?>

<?php $wizard->cmb->show_form(); ?>

<footer class="form-footer wp-core-ui rank-math-ui">
	<?php $wizard->get_skip_link(); ?>
	<button type="submit" class="button button-primary"><?php esc_html_e( 'Save and Continue', 'rank-math' ); ?></button>
</footer>
