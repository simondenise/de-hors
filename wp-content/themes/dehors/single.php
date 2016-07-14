<?php include("header.php"); ?>

<div id="page">
	<a href="http://de-hors.fr/accueil#page-accueil">
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
				height: 79vh;
				max-height:1020px;
				max-width: 1290px;
				}
				</style>
				<?php 
				}//end if ?>
				</style>
	<div class="content-cover">
	<div class="cover-title hidden centered"><?php the_title(); ?></div>
	</div>
	<div id="content">
		<div class="content-page-article">
							<?php $my_post_meta = get_post_meta($post->ID, '1', true); ?>
							<?php if ( ! empty ( $my_post_meta ) ) { ?>
			<div class="page-link">
						<?php
	 	$defaults = array(
			'before'           => '<div class="page-link-barre">',
			'after'            => '</div>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'next',
			'separator'        => '',
			'nextpagelink'     => __( '<div class="page-link-next">Page suivante</div>' ),
			'previouspagelink' => __( '<div class="page-link-previous">Page précédente</div>' ),
			'pagelink'         => '%',
			'echo'             => 1
		);
	        wp_link_pages( $defaults );
			?>	
			</div>
			<?php } ?>
		<?php the_content(); ?>
					<?php $my_post_meta = get_post_meta($post->ID, '1', true); ?>
							<?php if ( ! empty ( $my_post_meta ) ) { ?>
			<div class="page-link">
						<?php
	 	$defaults = array(
			'before'           => '<div class="page-link-barre">',
			'after'            => '</div>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'next',
			'separator'        => '',
			'nextpagelink'     => __( '<div class="page-link-next">Page suivante</div>' ),
			'previouspagelink' => __( '<div class="page-link-previous">Page précédente</div>' ),
			'pagelink'         => '%',
			'echo'             => 1
		);
	        wp_link_pages( $defaults );
			?>	
			</div>
			<?php } ?>
		</div>

		<div class="content-thumbnails-single">
						<div class="content-category-single">

<?php
$category = get_the_category();
if ($category) {
  echo '<a href="' . get_category_link( $category[0]->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category[0]->name ) . '" ' . '>' . SOMMAIRE.'</a> ';
}
?>

				</div>
		<?php 
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
		$args = array(
				'category' => $category_id,
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
					max-height: 123px;
					max-width: 180px;
					margin:auto;
				}
				</style>

				<div class="content-image">
					
														<?php
							$postID = get_the_ID(); /* <!-- /* 	Find current post id */
							if ( is_single($postID) ) 
							{
							?>
							<a href="<?php echo get_permalink( $post->ID ); ?>">
						<div class="image-button-single current-thumbnail">
							<div class="content-title current-title-thumbnail-small"><?php echo apply_filters( 'the_title', $post->post_title, $post->ID ); ?></div>
						
							<div id="thumbnail-<?php echo $imgID ?>"></div>
							<?php $my_post_meta = get_post_meta($post->ID, '1', true); ?>
							<?php if ( ! empty ( $my_post_meta ) ) { ?>
								<div class="sommaire">											
									<?php $my_post_meta = get_post_meta($post->ID, '1', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>">
								       <?php   echo "I. " . $my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '2', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>2">
								       <?php   echo "II. " . $my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '3', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>3">
								       <?php   echo "III. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '4', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>4">
								       <?php   echo "IV. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '5', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>5">
								       <?php   echo "V. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '6', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>6">
								       <?php   echo "VI. " .$my_post_meta . "<br />"; ?> 
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '7', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>7">
								       <?php   echo "VII. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '8', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>8">
								       <?php   echo "VIII. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '9', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>9">
								       <?php   echo "IX. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '10', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>10">
								       <?php   echo "X. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '11', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>11">
								       <?php   echo "XI. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '12', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>12">
								       <?php   echo "XII. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '13', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>13">
								       <?php   echo "XIII. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '14', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>14">
								       <?php   echo "IX. " .$my_post_meta . "<br />"; ?>
								    </a>
									<?php } ?>
									<?php $my_post_meta = get_post_meta($post->ID, '15', true); ?>
								    <?php if ( ! empty ( $my_post_meta ) ) { ?>
								    <a href="<?php the_permalink() ?>15">
								       <?php   echo "VX. " .$my_post_meta; ?>
								    </a>
									<?php } ?>
								</div>
								<?php } ?>

							<?php
							}
							else {	
							?>
					
							<a href="<?php echo get_permalink( $post->ID ); ?>">
						<div class="image-button-single">
							<div class="content-title title-thumbnail-small"><?php echo apply_filters( 'the_title', $post->post_title, $post->ID );?>
							</div>
							<div id="thumbnail-<?php echo $imgID ?>">
							</div>
							<?php } ?>
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
	</div>

</body>
</html>
