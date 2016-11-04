<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
	<div class="page_info_header-blog">
	  <div class="block">
	    <h2>BLOG</h2>
	    <p>lorem ipsum dolar etium milis</p>
	  </div>
	    <div class="blog-content">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="single_post">
					<div class="post_image" style="background-image: url(<?php echo hackeryou_featured_image_url($post); ?>)">
					</div>
					<div class="post_text">
				  		<h2 class="title"><?php the_title(); ?></h2>
						<p><span class="by">by - </span><a class="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
				  		<?php the_excerpt('<span class="moretext">Read More</span>');  ?> 
					</div>
				</div>

	 		<?php endwhile;?>
	 		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
	 		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

    	</div> <!--/.content -->
    </div> 
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>


    		








    		<!-- <?php //get_template_part( 'loop', 'index' );	?> -->