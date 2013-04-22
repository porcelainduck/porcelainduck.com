	<div class="container">
		<div class="row">
			<div class="eightcol">

				<section class="content <?php echo $post->post_type?>">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="inside">
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>

				</section>
			</div><!-- .sevencol -->
			
			<div class="threecol sidebar last">
				<p>The Blog of Ian Conrad</p>
				
			</div><!-- .fourcol -->
		</div><!-- .row -->
	</div><!-- .container -->
