<?php
	$tel1 = get_post_meta( get_page_by_title('Stopka')->ID, 'tel1', true );
	$tel2 = get_post_meta( get_page_by_title('Stopka')->ID, 'tel2', true );
	$adres = get_post_meta( get_page_by_title('Stopka')->ID, 'adres', true );
	$email = get_post_meta( get_page_by_title('Stopka')->ID, 'email', true );
	$top = get_post_meta( get_page_by_title('Stopka')->ID, 'top', true );
	$mid = get_post_meta( get_page_by_title('Stopka')->ID, 'mid', true );
	
?>
<footer>
    <div class='kontakt line_sep'>
		<div class='inner grid flex flex-justify-center flex-justify-between-ml flex-wrap'>
			<?php if( !empty( $tel1 ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon mobile fa fa-mobile theme-color" aria-hidden="true"></i>
				<?php echo $tel1; ?>
			</div>
			<?php endif; ?>
			<?php if( !empty( $tel2 ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon phone fa fa-phone theme-color" aria-hidden="true"></i>
				<?php echo $tel2; ?>
			</div>
			<?php endif; ?>
			<?php if( !empty( $adres ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon marker fa fa-map-marker theme-color" aria-hidden="true"></i>
				<?php echo $adres; ?>
			</div>
			<?php endif; ?>
			<?php if( !empty( $email ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon mail fa fa-envelope theme-color" aria-hidden="true"></i>
				<?php echo $email; ?>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
    <?php if( !empty( $top ) ): ?>
	<div class='postext line_sep'>
		<div class='inner grid'>
			<?php echo apply_filters( 'the_content', $top ); ?>
		</div>
	</div>
	<?php endif; ?>
    <?php if( !empty( $mid ) ): ?>
    <div class="bottom line_sep">
		<div class="inner grid">
			<?php echo apply_filters( 'the_content', $mid ); ?>
		</div>
    </div>
	<?php endif; ?>
    <div class="middle grid line_sep">
        <div class="container">
            <div class="inner flex flex-justify-around flex-justify-between-ds flex-items-center flex-wrap">
				
				<div class="item base1 base3-ml flex flex-items-center flex-justify-center flex-justify-start-ml">&copy; FunRace, 2017</div>
                <div class="item base1 base3-ml flex flex-items-center flex-justify-center">
					<a href="https://www.facebook.com/funracepl" class="box" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<!--<a href="#" class="box"><i class="fa fa-youtube" aria-hidden="true"></i></a>-->
					<a href="https://www.instagram.com/funrace.pl/" class="box" target='_blank'><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="<?php echo home_url( sprintf( '%s/kontakt', getSeason() ) ); ?>" class="box"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    
                </div>
                <div class="item base1 base3-ml flex flex-items-center flex-justify-center flex-justify-end-ml">
					<a class="scepter" href="http://www.scepter.pl">Dlaczego Agencja interaktywna Scepter?</a>
				</div>
            
			</div>
        </div>
    </div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>

