<?php
	$season = stripos( $_SERVER['REQUEST_URI'], '/lato/' ) !== false?( 'lato' ):( 'zima' );
	$fields = array( 'tel1', 'tel2', 'adres', 'email', 'top', 'mid' );
	
	$data = array();
	foreach( $fields as $field ){
		$out = get_post_meta( get_page_by_path("{$season}/stopka")->ID, $field, true );
		if( empty( $out ) ) $out = get_post_meta( get_page_by_path("stopka")->ID, $field, true );
		
		$data[ $field ] = $out;
	}
			
	if( DMODE ){
		echo "<!--";
		// echo $season;
		print_r( $data );
		echo "-->";
	}
	
?>
<footer>
    <div class='kontakt line_sep'>
		<div class='inner grid flex flex-justify-center flex-justify-between-ml flex-wrap'>
			<?php if( !empty( $data['tel1'] ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon mobile fa fa-mobile theme-color" aria-hidden="true"></i>
				<?php echo $data['tel1']; ?>
			</div>
			<?php endif; ?>
			<?php if( !empty( $data['tel2'] ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon phone fa fa-phone theme-color" aria-hidden="true"></i>
				<?php echo $data['tel2']; ?>
			</div>
			<?php endif; ?>
			<?php if( !empty( $data['adres'] ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon marker fa fa-map-marker theme-color" aria-hidden="true"></i>
				<?php echo $data['adres']; ?>
			</div>
			<?php endif; ?>
			<?php if( !empty( $data['email'] ) ): ?>
			<div class="item base1 base2-mm base4-ml no-shrink flex flex-items-center flex-justify-center flex-justify-start-mm">
				<i class="icon mail fa fa-envelope theme-color" aria-hidden="true"></i>
				<?php echo $data['email']; ?>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
    <?php if( !empty( $data['top'] ) ): ?>
	<div class='postext line_sep'>
		<div class='inner grid'>
			<?php echo apply_filters( 'the_content', $data['top'] ); ?>
		</div>
	</div>
	<?php endif; ?>
    <?php if( !empty( $data['mid'] ) ): ?>
    <div class="bottom line_sep">
		<div class="inner grid">
			<?php echo apply_filters( 'the_content', $data['mid'] ); ?>
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

