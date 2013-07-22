<?php get_header();?>
<div class="container_12">
<?php //get_sidebar();?> 




<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<?php if (!is_front_page()): ?> 

	
	<div class="page-content">
		<h2><?php the_title();?></h2>


	<?php the_content();?>
		
	</div><!--/page-content-->
<?php endif; ?>

<?php if(is_front_page()):?>
	<?php the_content();?>
<?php endif;?>
	
<?php endwhile; else:?>
<?php endif;?>






</div><!--/container_12-->

<?php get_footer();?>