<?php
	$season = $_SESSION['currentSeason'];
	$logo = wp_get_attachment_url( get_post_meta( get_post()->ID, 'logo', true ) );
	$info = array(
		'dla_kogo' => array(
			'name' => 'Dla kogo?',
			'icon' => 'ludzik.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'dla_kogo', true ) ),
		),
		'poziom' => array(
			'name' => 'Poziom',
			'icon' => $season === 'zima'?('zjazd.png'):('kajak.png'),
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'poziom', true ) ),
		),
		'miejsce' => array(
			'name' => 'Miejsce',
			'icon' => 'lokalizacja.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'miejsce', true ) ),
		),
		'rodzaj_szkolenia' => array(
			'name' => 'Rodzaj szkolenia',
			'icon' => 'rodzaj.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'rodzaj_szkolenia', true ) ),
		),
		'trasa' => array(
			'name' => 'Trasa',
			'icon' => 'lokalizacja.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'trasa', true ) ),
		),
		'kiedy' => array(
			'name' => 'Kiedy',
			'icon' => 'czas.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'kiedy', true ) ),
		),
		'czas_trwania' => array(
			'name' => 'Czas trwania',
			'icon' => 'czas.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'czas_trwania', true ) ),
		),
		'terminy' => array(
			'name' => 'Terminy',
			'icon' => 'kalendarz.png',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'terminy', true ) ),
		),
		
	);
	
	if( get_post_meta( get_post()->ID, 'on_tabela', true ) == true ):
?>
<div class='tabela flex flex-wrap'>
	<?php if( !empty( $logo ) ): ?>
	<div class='img base1 base2-ml flex flex-items-start flex-justify-center'>
		<img src="<?php echo $logo; ?>" />
		
	</div>
	<?php endif; ?>
	<div class='info base0 grow'>
		<?php
			foreach( $info as $name => $item ):
			if( !empty( $item['content'] ) ):
		?>
		<div class='bar flex flex-column'>
			<div class='head <?php echo $name; ?> flex flex-items-center'>
				<div class='icon flex flex-items-center'>
					<img src='<?php printf( '%s/img/icons/%s', get_template_directory_uri(), $item['icon'] ); ?>' />
				</div>
				<div class='text theme-color'>
					<?php echo $item['name']; ?>
				</div>
				
			</div>
			<div class='body'>
				<?php echo $item['content']; ?>
				
			</div>
			
		</div>
		<?php
			endif;
			endforeach;
		?>
		
	</div>
	
</div>
<?php endif; ?>