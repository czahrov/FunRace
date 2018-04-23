<div class="newsletter grid">
    <div class="container">
        <h2>Zapisz się do naszego <span>newslettera</span></h2>
        <form method='post' action='<?php echo home_url( 'newsletter' ); ?>'>
            <div class="box flex flex-column flex-row-ms">
                <input type="email" id="email" name="register" placeholder="Wpisz swój adres e-mail:">
                <button type='submit' class="flex flex-items-center flex-justify-center">
					<div class="send">Wyślij</div>
					<div class="arrow">
					<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_orange.png"></div>
				</button>
            </div>
        </form>
        <p>W każdej chwili możesz się z niego wypisać*</p>
    </div>
</div>