<?php 

	get_header(); ?>

<div id="main" class="group">
	<div id="blog" class="left-col">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div id="post">
			<p><br><?php the_content(); /*the_excerpt();*/ ?></br></p>
			<?php endwhile; ?>
			<?php endif; ?>
		</div> <!-- fin del post -->
	</div><!-- fin del blog -->
</div><!-- fin del main -->
	
<?php get_footer(); ?>
