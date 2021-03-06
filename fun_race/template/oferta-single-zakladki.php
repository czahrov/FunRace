<?php
	$ikona = wp_get_attachment_url( get_post_meta( get_post()->ID, 'ikona', true ) );
	$data = array(
		'opis_oferty' => array(
			'title' => 'Opis oferty',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'opis_oferty', true ) ),
			
		),
		'harmonogram' => array(
			'title' => 'Harmonogram',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'program_kursu', true ) ),
			
		),
		'dlaczego_kurs' => array(
			'title' => 'Dlaczego ta oferta',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'dlaczego_kurs', true ) ),
			
		),
		'cennik' => array(
			'title' => 'Cennik',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'cennik', true ) ),
			
		),
		'jak_dojechac' => array(
			'title' => 'Jak dojechać',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'jak_dojechać', true ) ),
			
		),
		'informacje' => array(
			'title' => 'Informacje',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'informacje', true ) ),
			
		),
		'faq' => array(
			'title' => 'FAQ',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'faq', true ) ),
			
		),
		'regulamin' => array(
			'title' => 'Regulamin',
			'content' => apply_filters( 'the_content', get_post_meta( get_post()->ID, 'regulamin', true ) ),
			
		),
		
	);
	
	
?>
<?php if( get_post_meta( get_post()->ID, 'on_zakladki', true ) == true ): ?>
<div class='zakladki'>
	<div class='top flex flex-wrap flex-items-center flex-justify-around'>
		<?php if( !empty( $ikona ) ): ?>
		<div class='img'>
			<img src="<?php echo $ikona; ?>" />
		</div>
		<?php endif; ?>
		<div class='text theme-color'>
			<?php
				printf(
					'%s - szczegóły oferty',
					get_post()->post_title
					
				);
			?>
		</div>
		
	</div>
	<div class='head flex flex-wrap theme-border'>
		<?php
			$count = 0;
			foreach( $data as $name => $item ): if( !empty( $item['content'] ) ):
		?>
		<div class='item theme-bg theme-border base1 base0-ml grow-mm flex flex-items-center flex-justify-center<?php if( $count === 0 ) echo " active"; ?>'>
			<?php echo $item['title']; ?>
		</div>
		<?php
			$count++;
			endif;
			endforeach;
		?>
		
	</div>
	<div class='tabs flex flex-column'>
		<?php
			$count = 0;
			foreach( $data as $name => $item ): if( !empty( $item['content'] ) ):
		?>
		<div class='item theme-border<?php
			echo " {$name}";
			echo $count === 0?( ' active' ):( '' );
			?>'>
			<?php
				echo $item['content'];
			?>
		</div>
		<?php
			$count++;
			endif;
			endforeach;
		?>
	</div>
	
</div>
<?php endif; ?>