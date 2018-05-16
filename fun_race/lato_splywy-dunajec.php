<?php
	get_header();

	/*
	Template Name: lato splywy dunajec
	*/
?>
<body id="splywy-kajakowe" class='<?php do_action( 'body_hook' ); ?>'>
 <header>
     <?php get_template_part("template/menu"); ?>
	<?php banner(); ?>
 </header>
     <!-- BREADCRUMBS -->
    <?php get_template_part('template/breadcrumbs'); ?>


<!-- OFFER SINGLE -->
<div class="single grid">
    <div class="container padding">
        <div class="content">
            <h3><span>Dołącz</span> do nas tego lata</h3>
             <p>Spływy kajakowe na Dunajcu to idealna propozycja dla osób chcących połączyć aktywny wypoczynek  z możliwością podziwiania krajobrazu pienińskiej przyrody. Do dyspozycji klientów przygotowaliśmy trzy trasy o zróżnicowanej długości, które umożliwiają spływy kajakowe dla każdego poziomu zaawansowania. Profesjonalny, turystyczny sprzęt wraz z kompleksową obsługą zapewnia komfort wypoczynku i niezapomnianą zabawę na Dunajcu!
            </p>
            <p>
            Istnieje możliwość zorganizowania spływu pod opieką instruktorów kajakarstwa górskiego, Mistrzów Polski w kajakarstwie górskim.</p>
        </div>
        <div class="white-space-80"></div>
        
        <div class="content">
            <h3>Trasy spływów kajakowych <span> na Dunajcu</span></h3>
        </div>
        
		<div class='wrapper'>
			<?php
				$pages = get_pages( array(
					'parent' => get_post()->ID,
					
				) );
				
				foreach( $pages as $page ):
			?>
			<div class='item' style='background-image: url( <?php echo get_the_post_thumbnail_url( $page->ID, 'medium' ); ?> );'>
				<a href='<?php the_permalink( $page->ID ); ?>' class='hitbox'>
					<div class='btn'>
						zobacz ofertę
					</div>
					
				</a>
				<div class='name'>
					<?php echo $page->post_title; ?>
				</div>
				
			</div>
			<?php endforeach; ?>
		</div>
		
    </div>
</div>


<!-- CONTACT BAR-->
<?php get_template_part("template/contact-bar"); ?>
<!-- NEWSLETTER -->
<?php get_template_part("template/partners-full"); ?>
<!-- FOOTER -->
<?php get_footer(); ?>