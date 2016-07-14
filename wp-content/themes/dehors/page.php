<?php include("header.php"); ?>

<div id="page">
	<a href="<?php echo get_permalink(138); ?>">
		<div id="header-title">
			<div id="header-title-container-left">DE</div>
			<div id="header-title-container-middle"></div>
			<div id="header-title-container-right">HORS</div>
		</div>
	</a>
	<div id="header-cat">
		<div id="header-cat-button-left"><a href="<?php echo get_permalink(147); ?>">RECHERCHES</a></div>
		<div id="header-cat-button-middle"><a href="<?php echo get_permalink(149); ?>">PROJETS</a></div>
		<div id="header-cat-button-right"><a href="<?php echo get_permalink(151); ?>">COLLECTIONS</a></div>
	</div>


	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

	<?php if (has_post_thumbnail()) { //if a thumbnail has been set
	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array ?>
	<style type="text/css">
		.content-cover {
			background-image: url(<?php echo $imgURL ?>);
			background-repeat: no-repeat ;
			background-position: center;   
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			height: 84vh;
			max-height: 1009px;
			max-width: 1290px;
		}
	</style>

	<?php } ?>
</style>
<div class="content-cover">
	<div class="cover-title hidden centered"><?php the_title(); ?></div>
</div>
<div id="content">

	<div class="content-text-container">
		<div class="page-text">
		<?php the_content(); ?>
		
		</div>
	</div>

	<div class="content-thumbnails">
							<div class="content-category">
							<h1>
SOMMAIRE
							</h1>
				</div>
		<?php 
		$categorySlug = get_the_slug();
		$args = array(
				'category_name' => $categorySlug,
				'order' => 'ASC'
		);
		$posts = get_posts( $args ); ?> 
		
		<ul>
			<?php foreach ( $posts as $post ) : ?>
			<li>
				<?php
					$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
					$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
					$imgURL = $featuredImage[0]; //get the url of the image out of the array ?>
				<style type="text/css">
				    #thumbnail-<?php echo $imgID ?> {
					background-image: url(<?php echo $imgURL ?>);
					background-repeat: no-repeat ;
					background-position: center;   
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
					width:33vw;
					height:26vw;
					max-height: 251px;
					max-width:  307px;
				}
				</style>
				<div class="content-image">
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<div class="image-button" id="thumbnail-<?php echo $imgID ?>">
							<div class="content-title title-thumbnail-medium hidden noselect"><?php echo apply_filters( 'the_title', $post->post_title, $post->ID ); ?>
							</div>
						</div>
					</a>
				</div>	
			</li>
			<?php endforeach; ?>
		</ul>
	</div>

					
	
						
					<?php endwhile; ?>
					<?php else : ?>		
					<p>Désolé, aucun article ne correspond à vos critères.</p>
					<?php endif; ?>
				</div>
	<?php include("footer.php"); ?>


</body>
</html>
