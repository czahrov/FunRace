<div class="kontakt">
	<div class="grid">
		<div class="container padding">
			<div class="content">
				<?php get_template_part( 'template/kontakt', 'formularz' ); ?>
				<?php get_template_part( 'template/kontakt', 'dane' ); ?>
				<h2>Lokalizacja Funrace</h2>
			</div>
		</div>
		<div class="container">
			<script>
				var markers = JSON.parse( '<?php echo json_encode( getMarkers() ); ?>' );
			</script>
			<div id="map">
			</div>
		</div>
	</div>
</div>