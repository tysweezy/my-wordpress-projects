<?php get_header();?>

<div class="container_12">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<em>
		By: <?php echo get_the_author_link();?>
	</em>

	<?php the_content();?>

<?php endwhile; else:?>
<?php endif;?>





</div><!--/container_12-->




<?php get_footer();?>