<?php
	$season = $_SESSION['currentSeason'];
?>
<div class="contact-bar grid">
    <div class="container padding flex flex-items-center">
        <div class="tips flex flex-justify-center flex-justify-start-dm">
            <ul class="text-center text-left-dm">
                <li>Masz pytania?</li>
                <li>Chcesz dokonać rezerwacji?</li>
                <li>Skontaktuj się z nami</li>
            </ul>
        </div>
        <div class="buttons flex flex-column flex-items-center flex-row-ds flex-justify-center-ds">
			<?php dynamic_sidebar( 'oferta' ); ?>
			<div class="item btn flex theme-bg">
				<div class="textwidget">
					<p>
						<a href="<?php echo home_url("/{$season}/kontakt"); ?>">Napisz do nas</a>
					</p>
				</div>
			</div>
			<div class="item btn flex theme-bg">
				<div class="textwidget">
					<p>
						<a class="active" href="<?php echo home_url("/{$season}/rezerwuj"); ?>">REZERWUJ ONLINE</a>
					</p>
				</div>
			</div>            
        </div>
    </div>
</div>
