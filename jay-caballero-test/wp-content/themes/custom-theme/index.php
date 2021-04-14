<?php get_header(); ?>
	<div class="row">
		<div class="col-12">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</div> 
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?