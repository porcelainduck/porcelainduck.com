

<section class="content <?php echo $post->post_type?>">

<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="inside">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php the_content(); ?>
		
		<?php if (is_single()): ?>
		<p><a href="/news/">view more news stories &raquo;</a></p>
		<?php endif; ?>
	</div>
	
<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1): ?>
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link('&larr; Older posts'); ?></div>
			<div class="nav-next"><?php previous_posts_link('Newer posts &rarr;'); ?></div>
		</div>
	<?php endif; ?>

</section>


