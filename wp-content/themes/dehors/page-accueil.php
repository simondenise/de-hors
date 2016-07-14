<?php include("header.php"); ?>
      <!-- BACKGROUND -->
      <a href="#page-accueil">

        <div class="background noselect">
			
            <!-- COLUMN 1 -->
            <div class="column" id="column1">
                <!-- ROWS -->
                <div class="row1">
                    <div class="bigLetter">D</div>
                </div>
                <div class="row2">
                    <div class="bigLetter">H</div>
                </div>
                <div class="row3">
                    <div class="smallLetter select">
LILIANA MOTTA, artiste botaniste<br/>
avec la collaboration de<br/>
YVES-MARIE ALLAIN, ingénieur horticole <br/>
SÉBASTIEN ARGANT, paysagiste<br/>
DAVID BELAMY, paysagiste <br/>
JEAN-MARIE BOURGES, paysagiste
                    </div>
                </div>
            </div><!-- 
            COLUMN 2 
            --><div class="column" id="column2">

                <!-- ROWS -->
                <div class="row1">
                    <div class="bigLetter">E</div>
                </div>
                <div class="row2">
                    <div class="bigLetter">O</div>
                </div>
                <div class="row3">
                    <div class="smallLetter select">
ADRIEN BIEWERS, paysagiste <br/>
YVAN CAPPELAERE, paysagiste <br/>
JEAN-CHRISTOPHE DENISE, architecte <br/>
LÉON DENISE, game developer <br/>
SIMON DENISE, graphiste <br/>
PATRICK DEGEORGES, philosophe 
                    </div>
                </div>
            </div><!-- 
            COLUMN 3 
            --><div class="column" id="column3">
            <!-- BARRE -->
            <div class="barre"></div>
                <!-- ROWS -->
                <div class="row2">
                    <div class="bigLetter">R</div>
                </div>
                <div class="row3">
                    <div class="smallLetter select">
CAPUCINE DUFOUR, paysagiste <br/>
CAMILLE FRECHOU, paysagiste<br/>
THOMAS IRASQUE, paysagiste <br/>
ALEXANDERE MALFAIT, paysagiste<br/>
LAURENCE ROBERT, artiste paysagiste<br/>
DAMIEN ROGER, paysagiste 
                    </div>
                </div>
            </div><!-- 
            COLUMN 4 
            --><div class="column" id="column4">

                <!-- ROWS -->
                <div class="row2">
                    <div class="bigLetter">S</div>
                </div>
                <div class="row3">
                    <div class="smallLetter select">
LAURA ROUBINET, paysagiste<br/>
ADRIEN ROUSSEAU, artiste paysagiste<br/>
LINDA SEYVE, artiste paysagiste<br/>
LUC SCHUHMACHER, artiste<br/>
MARGAUX VIGNE, paysagiste<br/>
CYRILLE WEINER, photographe
                    </div>
                </div>
            </div>    
</div>
</a>
	<style type="text/css">
/* Header Title */
#header-title {
    background-color: #da2128;
        color: #f1f2f2;
}

#header-title-container-left {
	background-color: #da2128;

}

#header-title-container-middle {
    background-color: #f1f2f2;
}

#header-title-container-right {
	background-color: #da2128;
}

/* Header cat */
#header-cat {
    background-color: #dcddde;
    color: #f1f2f2;
}
#header-cat a { color:#f1f2f2;}
	</style>

<div name="page-accueil" id="page-accueil">
	<a href="<?php echo get_permalink(138); ?>">
	<div id="header-title">
		<div id="header-title-container-left">DE</div>
		<div id="header-title-container-middle"></div>
		<div id="header-title-container-right">HORS</div>
	</div>
	</a>
	<div id="content-accueil">
<ul><?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?><li><!--
									--><a href="<?php echo get_permalink(235); ?>"><!--
									--><div class="edito-container"><!--
									--><div class="edito-text"><?php the_content(); ?><!--
									--></div><!--
									--></div><!--
									--></a><!--
									--></li><!--
									--><li><!--
									--><a href="<?php echo get_permalink(149); ?>"><!--
									--><div class="image-logo-container"><!--
									--><div class="image-logo-title projets">Projets</div><!--
									--><div class="image-logo-line1"></div><!--
									--><div class="image-logo-line2"></div><!--
									--><div class="image-logo-de">DE</div><!--
									--><div class="image-logo-line3"></div><!--
									--><div class="image-logo-line4 "></div><!--
									--><div class="image-logo-hors">HORS</div><!--
									--><div class="image-logo-line5"></div><!--
									--></div><!--
									--></a><!--
									--></li><!--
									--><li>
									<a href="<?php echo get_permalink(147); ?>">
									<div class="image-logo-container">
									<div class="image-logo-title recherches">RECHERCHES</div>
									<div class="image-logo-line1"></div>
									<div class="image-logo-line2"></div>
									<div class="image-logo-de">DE</div>
									<div class="image-logo-line3"></div>
									<div class="image-logo-line4"></div>
									<div class="image-logo-hors">HORS</div>
									<div class="image-logo-line5"></div>
									</div>
									</a>
									</li><!--
									--><li>
									<div class="image-logo-container">
									<div class="image-logo-title collection ">Collection</div>
									<div class="image-logo-line1"></div>
									<div class="image-logo-line2"></div>
									<div class="image-logo-de">DE</div>
									<div class="image-logo-line3"></div>
									<div class="image-logo-line4"></div>
									<div class="image-logo-hors">HORS</div>
									<div class="image-logo-line5"></div>
									</div>
									</li><!--
									--><?php  $args = array( 
								             'child_of'    => 147,
								             'sort_column' => 'post_date',
										     'sort_order'  => 'asc'
										);
								$child_pages = get_pages( $args );
								
								$args['child_of'] = 149;
								        $second_page_group = get_pages( $args );
								        $child_pages = array_merge( $child_pages, $second_page_group );
								$args['child_of'] = 151;
								        $third_page_group = get_pages( $args );
								        $child_pages = array_merge( $child_pages, $third_page_group );
								unset( $second_page_group, $third_page_group, $args );
										foreach ( $child_pages as $page ) : ?><!--
									--><li><?php $imgID = get_post_thumbnail_id($page->ID); //get the id of the featured image
									$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
									$imgURL = $featuredImage[0]; //get the url of the image out of the array ?><!--
									--><style type="text/css">
		    #thumbnail-<?php echo $imgID ?> {
			background-image: url(<?php echo $imgURL ?>);
			background-repeat: no-repeat ;
			background-position: center;   
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-color:#DCDDDE;
			width:412px;
			height:427px;
			max-height: 427px;
			max-width: 412px;
			margin-left: 4px;
margin-right: 4px;
		}</style><!--
									--><div class="content-image">
			<a href="<?php echo get_permalink( $page->ID ); ?>">
				<div class="image-button-accueil" id="thumbnail-<?php echo $imgID ?>">
					<div class="content-title hidden centered"><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?>
					</div>
				</div>
			</a>
		</div>	
	</li><!--
									--><?php endforeach; ?>
</ul>
						
<?php endwhile; ?>
<?php else : ?>		
<p>Désolé, aucun article ne correspond à vos critères.</p>
<?php endif; ?>

</div>		
</div>
	<?php include("footer.php"); ?>
</body>
</html>