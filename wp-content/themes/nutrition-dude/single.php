<?php get_header();?>

<div class="container_12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title();?></h2>
	<?php the_content();?>
<?php endwhile; else:?>
<?php endif; ?>

<?php comments_template('', true);?>

</div><!--/container_12-->

<?php get_footer();?>

