<div class="share inline-flex flex-items-center">
	<div class="icon flex">
		<img src="<?php echo get_template_directory_uri(); ?>/img/share.png" alt="share">
	</div>
	<div class="text">Udostępnij</div>
	<div class='links flex flex-column'>
		<?php
			$url = sprintf(
				'%s%s',
				home_url(),
				queryModify( array( 'item' => $post->ID ) )
			);
			
		?>
		<a class='link fb' href='<?php
			printf(
				'https://www.facebook.com/sharer/sharer.php?u=%s',
				urlencode( $url )
				
			);
		?>' target='_blank'>
			<div class='icon fa fa-facebook-official'></div>
		</a>
		<a class='link twitter' href='<?php
			printf(
				'https://twitter.com/share?url=%s&text=%s',
				urlencode( $url ),
				$post->post_title
				
			);
		?>' target='_blank'>
			<div class='icon fa fa-twitter-square'></div>
		</a>
		
	</div>
</div>