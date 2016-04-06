<?php
/**
 * Template Name: Register Account
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress Start
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main register-page" role="main">

			<header class="entry-header group">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<?php wc_print_notices(); ?>

			<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

			<div class="col2-set woocommerce" id="customer_login">

				<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

				<div class="col-2">

					<!-- <h2><?php //_e( 'Register', 'woocommerce' ); ?></h2> -->

					<form method="post" class="login register">

						<?php do_action( 'woocommerce_register_form_start' ); ?>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

							<p class="form-row form-row-wide">
								<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
							</p>

						<?php endif; ?>

						<p class="form-row form-row-wide">
							<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
							<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
						</p>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

							<p class="form-row form-row-wide">
								<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="password" class="input-text" name="password" id="reg_password" />
							</p>

						<?php endif; ?>

						<!-- Spam Trap -->
						<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

						<?php do_action( 'woocommerce_register_form' ); ?>
						<?php do_action( 'register_form' ); ?>

						<p class="form-row">
							<?php wp_nonce_field( 'woocommerce-register' ); ?>
							<input type="submit" class="purple-btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
						</p>

						<?php do_action( 'woocommerce_register_form_end' ); ?>

						<p class="have-account">Have an account? <a href="#">Click here.</a></p>

					</form>

					

				</div>

			</div>
			<?php endif; ?>

			<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
