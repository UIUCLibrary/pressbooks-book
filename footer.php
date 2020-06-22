<?php if ( ! is_single() ) { ?>
	</div><!-- #content -->
<?php } ?>
</main>
<?php
global $multipage;
?>
                        <footer class="footer-library container" role="contentinfo">
                                <div class="row">
                                                        <div class="column footer-library_right" style="text: white">
                                                                <p>ABOUT</p>
                                                                <nav>
                                                                        <ul>
                                                                                <li><a href="https://iopn.library.illinois.edu/iopn-mission/">About IOPN</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/advisory-board/">Advisory Board</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/policies/">Policies</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/news/">IOPN News</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/contact/">Contact</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/policies/#accessibility">Accessibility</a></li>
                                                                        </ul>
                                                                </nav>

                                                        </div>
                                                        <div class="column hidden-sm hidden-xs footer-library_right">
                                                                <p>PUBLISHING WITHOUT WALLS<p>
                                                                <nav>
                                                                        <ul>
                                                                                <li><a href="https://iopn.library.illinois.edu/publishing-without-walls/">About PWW</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/books/pww/catalog">PWW Catalog</a></li>
                                                                                <li><a href="https://pww.afro.illinois.edu">AFRO-PWW Project</a></li>

                                                                        </ul>
                                                                </nav>


                                                        </div>
                                                        <div class="column hidden-sm hidden-xs footer-library_right">
                                                                <p>WINDSOR & DOWNS</p>
                                                                <nav>
                                                                        <ul>
                                                                                <li><a href="https://iopn.library.illinois.edu/windsor-downs-press/">About Windsor and Downs</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/books/windsor-downs/catalog">Windsor and Downs Catalog</a></li>
                                                                        </ul>
                                                                </nav>


                                                        </div>

                                                        <div class="column footer-library_right">
                                                                <p>IOPN JOURNALS</p>
                                                                <nav>
                                                                        <ul>
                                                                                <li><a href="https://iopn.library.illinois.edu/iopn-journals/">About IOPN Journals</a></li>
                                                                                <li><a href="https://iopn.library.illinois.edu/journals/">IOPN Journals Catalog</a></li>
                                                                        </ul>
                                                                </nav>
                                                        </div>
                                </div>
                        </footer>

if ( $pb_network_contact_form ) {
	$contact_link = network_home_url( '/#contact' );
} else {
	if ( ! empty( $pb_network_contact_link ) ) {
		$contact_link = $pb_network_contact_link;
	} else {
		/**
		 * Filter the "Contact" link.
		 *
		 * @since 5.6.0
		 */
		$contact_link = apply_filters( 'pb_contact_link', '' );
	}
}

if ( $contact_link ) {
	$contact_link_href = sprintf(
		'&bull; <a href="%1$s">%2$s</a>',
		$contact_link,
		__( 'Contact', 'pressbooks' )
	);
} else {
	$contact_link_href = '';
}

?>
">
	<div class="footer__inner">
		<section class="footer__pressbooks">
			<a class="footer__pressbooks__icon" href="https://pressbooks.com" title="Pressbooks">
				<?php // TODO ?>
				<svg class="icon--svg">
					<use href="#icon-pressbooks" />
				</svg>
			</a>
			<div class="footer__pressbooks__links">
				<?php /* translators: %s: Pressbooks */ ?>
				<p class="footer__pressbooks__links__title"><a href="https://pressbooks.com"><?php printf( __( 'Powered by %s', 'pressbooks-book' ), '<span class="pressbooks">Pressbooks</span>' ); ?></a></p>
				<ul class="footer__pressbooks__links__list">
					<li><a href="https://pressbooks.com/help-and-support/"><?php _e( 'Guides and Tutorials', 'pressbooks-book' ); ?></a></li>
					<?php if ( $contact_link ) : ?>
						<li>|<a href="<?php echo $contact_link; ?>"><?php _e( 'Contact', 'pressbooks-aldine' ); ?></a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="footer__pressbooks__social">
				<a href="https://www.youtube.com/user/pressbooks" title="<?php _e( 'Pressbooks on YouTube', 'pressbooks-book' ); ?>">
					<img class="youtube-link" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/yt_icon_mono_dark.png" alt="YouTube">
					<span class="screen-reader-text"><?php _e( 'Pressbooks on YouTube', 'pressbooks-book' ); ?></span>
				</a>
				<a class="twitter" href="https://twitter.com/intent/follow?screen_name=pressbooks" title="<?php _e( 'Pressbooks on Twitter', 'pressbooks-book' ); ?>">
					<svg class="icon--svg">
						<use href="#twitter" />
					</svg>
				<span class="screen-reader-text"><?php _e( 'Pressbooks on Twitter', 'pressbooks-book' ); ?></span></a>
			</div>

<?php wp_footer(); ?>
</div>
</body>
</html>
