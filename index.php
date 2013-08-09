<?php 
//llamada al header
	get_header(); ?>
<!-- llamando a la vista previa de los posts -->
<div id="main" class="group">
	<div id="blog" class="left-col">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div id="post">			
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="byline">escrito por <?php the_author_posts_link(); ?> en <?php the_time('l F d, Y'); ?></div>
			<p><br><?php /*the_content('leer mas..');*/ the_excerpt(); ?></br></p>
			<br></br>
			<br></br>
		</div> <!-- fin del post -->
			<?php endwhile; else: ?>
			<p><?php _e('post no encontrado'); ?></p>
			<?php endif; ?>
			<div class="navi">
				<div class="right">
					<?php previous_posts_link('anterior'); ?>
					<?php next_posts_link('siguiente'); ?>
				</div>
			</div>
	</div><!-- fin del blog -->
</div><!-- fin del main -->

<!-- llamada al footer -->
<?php get_footer(); ?>
		
