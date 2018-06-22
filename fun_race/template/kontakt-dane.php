<?php
	$season = getSeason();
?>
<h2>Dane kontaktowe</h2>
<div class="row row2 flex flex-column flex-row-mm flex-justify-center flex-justify-start-ds flex-wrap">
	<?php dynamic_sidebar( "kontakt-2-{$season}" ); ?>
</div>
<div class="row flex flex-column flex-row-mm flex-justify-center flex-justify-start-ds flex-wrap">
	<?php dynamic_sidebar( "kontakt-{$season}" ); ?>
</div>
